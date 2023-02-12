<?php
namespace App\Controller;

use App\Controller\AppController;

class CartController extends AppController {
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['index']);
    }
    public function index(){

    }
}
