<?php

namespace app\controllers\site;

use app\controllers\ContainerController;
use app\models\site\Product;
use app\models\admin\Upload;

class ProductController extends ContainerController
{
    public function index()
        {
            $product = new Product;
            $products = $product->all();

            $products = $product->setLimit(5)->setCurrentPage()->postPaginate();
            $links = $product->renderLinks($products['total']);
            
            $upload = new Upload;
            $allImages = $upload->all();
            
            $productImages = [];
            foreach ($allImages as $image) {
                if (!isset($productImages[$image->product_id])) {
                    $productImages[$image->product_id] = [];
                }
                $productImages[$image->product_id][] = $image;
            }
            
            foreach ($products['data'] as $product) {
                $productId = $product->id;
                $product->images = isset($productImages[$productId]) ? $productImages[$productId] : [];
            }
            
            $this->view([], 'site.header');
            $this->view([
                'title' => 'Product',
                'products' => $products['data'],
                'links' => $links
            ], 'site.productList');
            $this->view([], 'site.footer');
            $this->view([], 'site.master');
        }

    

    public function show()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $product = new Product;
        $products = $product->find('id', $id);

        $uploadModel = new Upload;
        $uploads = $uploadModel->findByProductId($id);

        $this->view([ ], 'site.header');
        
        $this->view([
            'title' => 'Product',
            'products' => $products,
            'upload' => $uploads
        ], 'site.product');
        
        $this->view([ ], 'site.footer');
        $this->view([ ], 'site.master');
    }
}