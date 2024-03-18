<?php

namespace app\controllers\site;

use app\models\site\Post;
use app\controllers\ContainerController;

class PostController extends ContainerController
{
    private $post;

    public function __construct()
    {
        $this->post = new Post;
    }

    public function index()
    {
        $post = new Post;
        $posts = $post->all();

        $posts = $this->post->setLimit(2)->setCurrentPage()->postPaginate();
        $links = $this->post->renderLinks($posts['total']);

        $this->view([ ], 'site.header');
        
        $this->view([
            'title' => 'Post',
            'posts' => $posts['registers'],
            'links' => $links
        ], 'site.postList');
        
        $this->view([ ], 'site.footer');
        $this->view([ ], 'site.master');
    }

    public function show()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $post = new Post;

        $posts = $post->find('id', $id);

        
        $this->view([ ], 'site.header');
        
        $this->view([
            'title' => 'Post',
            'posts' => $posts
        ], 'site.post');
        
        $this->view([ ], 'site.footer');
        $this->view([ ], 'site.master');
    }
}