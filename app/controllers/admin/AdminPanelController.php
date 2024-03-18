<?php

namespace app\controllers\admin;

use app\classes\ImageUpload;
use app\models\site\User;
use app\models\admin\Post;
use app\models\admin\Product;
use app\controllers\ContainerController;
use app\models\admin\Upload;
use Exception;

class AdminPanelController extends ContainerController
{
    public function index()
    { 
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }

        $user = new User;
        $users = $user->all();

        $product = new Product;
        $products = $product->all();

        $post = new Post;
        $posts = $post->all();

         $this->view([
            'title' => 'Panel',
            'users' => $users,
            'products' => $products,
            'posts' => $posts
        ], 'admin.master');

    }

    public function store()
    {
        try{
            $upload = new ImageUpload($_FILES);
            $filePath = $upload->upload(300,'uploads');
    
            $uploadImage = new Upload;
            $uploaded = $uploadImage->insert([
                'path' => $filePath]);
            
        } catch (Exception $e){
            var_dump('error', $e->getMessage());
        }       
    }
    
    

    public function user_show()
    {
        if(!isset($_SESSION['admin_logged'])){
            redirect ('/');
        }
        
        $this->view([ ], 'admin.header');

        $user = new User;
        $users = $user->all();
        
        $this->view([
            'title' => 'User',
            'users' => $users
            
        ], 'admin.user');

        $this->view([ ], 'admin.footer');
    }

    public function destroy()
    {
        unset($_SESSION['admin_logged']);
    
        return redirect('/');
    }
}