<?php

namespace app\controllers\site;

use app\models\site\Post;
use app\models\admin\Upload;
use app\models\admin\Product;
use app\controllers\ContainerController;

class HomeController extends ContainerController
{
  public function index()
  {
    $post = new Post;
    $posts = $post->all();
    
    $product = new Product;
    $products = $product->all();

    $upload = new Upload;
    $allImages = $upload->all();

    $productImages = [];
    foreach ($allImages as $image) {
        if (!isset($productImages[$image->product_id])) {
            $productImages[$image->product_id] = [];
        }
        $productImages[$image->product_id][] = $image;
    }

    foreach ($products as $product) {
        $product->images = isset($productImages[$product->id]) ? $productImages[$product->id] : [];
    }
    
    $this->view([ ], 'site.header');
    
    $this->view([ 
      'title' => 'Home',
      'posts' => $posts,
      'products' => $products
    ], 'site.main');
    
    $this->view([ ], 'site.footer');
    $this->view([], 'site.master');
  }
}
