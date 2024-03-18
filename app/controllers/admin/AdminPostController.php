<?php

namespace app\controllers\admin;

use app\models\admin\Post;
use app\validate\Validation;
use app\controllers\ContainerController;
use app\validate\admin\Post as validatePost;

class AdminPostController extends ContainerController
{
    public function index()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

        $this->view([ ], 'admin.header');

        $this->view([ ], 'admin.postRegister');

        $this->view([ ], 'admin.footer');
    }

    public function store()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
        $post = validate(validatePost::class);

        if($post->hasErrors()){
            flash($post->getErrors());
            
            return back();
        }

        $post = new Post;
        
        $posted = $post->insert([
            'title' => request('title') ,
            'subTitle' => request('subTitle') ,
            'content' => request( 'content') ,
            'image_path' => request('image_path') 
        ]);

        
        if($posted){
            flash(['post' =>'Post cadastrado com sucesso']);
            redirect('/adminPost');
        }

        flash(['post' =>'Erro ao cadastrar']);

        return redirect('/adminPost');
    }
    
    public function show()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
        $post = new Post;
        $posts = $post->all();
        
        $this->view([ ], 'admin.header');
        
        $this->view([
            'title' => 'Post Show',
            'posts' => $posts
            
        ], 'admin.postEdit');

        $this->view([ ], 'admin.footer');
    }

    public function edit()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $post = new Post;
        $postFound = $post->find('id', $id);

        $this->view([ ], 'admin.header');

        $this->view([
            'title' => 'Post Edit',
            'postFound' => $postFound
            
        ], 'admin.postUpdate');

        $this->view([ ], 'admin.footer');
    }

    public function update()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
        $validation = new Validation;

        $validate = $validation->validate($_POST);

        $post = new Post;

        $updated = $post->update($validate, ['id' => $validate->id]);

        if($updated){
            flash(['post' =>'Post Atualizado com sucesso']);
         
            redirect('/adminPost');
        }
    }

    public function delete()
    {

        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $post = new Post;

        $deleted = $post->delete( 'id', $id);

        if($deleted){
            flash(['post' =>'Post deletado com sucesso']);
            redirect( '/adminPost');
        }

        flash('message','Erro ao deletar');
        
        redirect( '/adminPost');
        }
}