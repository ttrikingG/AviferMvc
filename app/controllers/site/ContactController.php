<?php

namespace app\controllers\site;

use app\controllers\ContainerController;

class ContactController extends ContainerController
{
    public function index()
    {
        $this->view([ ], 'site.header');
        
        $this->view([
            'title' => 'Contato',
        ], 'site.contact');
        
        $this->view([], 'site.footer');
        $this->view([], 'site.master');
    }
}