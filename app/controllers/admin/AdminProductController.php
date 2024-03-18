<?php

namespace app\controllers\admin;

use app\classes\ImageUpload;
use app\models\admin\Upload;
use app\validate\Validation;
use app\models\admin\Product;
use app\controllers\ContainerController;
use app\validate\admin\Product as validateProduct;

class AdminProductController extends ContainerController
{
    public function index()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

        $this->view([ ], 'admin.header');

        $this->view([ ], 'admin.productRegister');

        $this->view([ ], 'admin.footer');
    }

    public function store()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
        $product = validate(validateProduct::class);
        
        if($product->hasErrors()){
            flash($product->getErrors());
            return back();
        }

        $upload = new ImageUpload($_FILES);
        $filePath = $upload->upload(300, 'uploads');

        if(!$filePath){
            flash(['product' =>'Erro ao fazer upload da imagem, formato ou tamanho inválidos']);
            return redirect('/adminProduct');
        }

        $product = new Product;
        
        $productId = $product->insert([
            'categoria' => request('categoria'),
            'title' => request('title'),
            'sub_title' => request('sub_title'),
            'description' => request('description'),
            'price' => request('price')
        ]);

        if(!$productId){
            flash(['product' =>'Erro ao cadastrar produto']);
            return redirect('/adminProduct');
        }
        
        if($productId){
            $uploadImage = new Upload;
            $uploaded = $uploadImage->insert([
                'product_id' => $productId,
                'path' => $filePath
            ]);
                
                flash(['product' => 'Produto cadastrado com Sucesso']);
                redirect('/adminProduct');
            }

            flash(['product' => 'Erro ao cadastrar']);
            return redirect('/adminProduct');
    }


    public function show()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

        $product = new Product;
        $products = $product->all();

        $this->view([ ], 'admin.header');

        $this->view([
            'title' => 'Products Show',
            'products' => $products
            
        ], 'admin.productEdit');

        $this->view([ ], 'admin.footer');
    }

    public function edit()
    {
        if(!isset($_SESSION['admin_logged'])){
             redirect ('/');
        }
        
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
        
        $product = new Product;
        $productFound = $product->find('id', $id);
        
        $this->view([ ], 'admin.header');
        
        $this->view([
            'title' => 'Product Edit',
            'productFound' => $productFound
            
        ], 'admin.productUpdate');
        
        $this->view([ ], 'admin.footer');
        
    }

    public function update()
    {
         if(!isset($_SESSION['admin_logged'])){
             redirect ('/');
        }
        
         $validation = new Validation;

         $validate = $validation->validate($_POST);

        $product = new Product;

         $updated = $product->update($validate, ['id' => $validate->id]);

        if($updated){
            flash(['product' => 'Produto Atualizado com sucesso']);
         
           redirect('/adminProduct');
        }
    }

    public function delete()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $product = new Product;

        $deleted = $product->delete( 'id', $id);

        if($deleted){
            flash(['product' =>'Produto deletado com sucesso']);
            redirect( '/adminProduct');
        }

        flash('message','Erro ao deletar');
        
        redirect( '/adminProduct');
        }
}