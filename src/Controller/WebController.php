<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
use DateTime;

class WebController extends AppController{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
        parent::beforeFilter($event);
        // Configure the login action to not require authentication, preventing
        // the infinite redirect loop issue
        $this->Authentication->addUnauthenticatedActions(['index']);
    }
    public function index(){
        $connection = ConnectionManager::get('default');
        $typesTable = $this->getTableLocator()->get('Types');
        $categoriesTable = $this->getTableLocator()->get('Categories');

        $types = $typesTable->find('all')
            ->where(['status'=>1])
            ->order(['id'=>'asc'])
            ->limit(2);

        //debug($types); exit();

        $varios = $connection->newQuery()
            ->select('title, description, icono')
            ->from('varios')
            ->where(['status' => 1])
            ->order(['id'=>'asc'])
            ->execute()
            ->fetchAll('assoc');

        $categories = $categoriesTable->find('all')
            ->where(['status'=>1])
            ->order(['id'=>'asc'])
            ->limit(3);

        $products = $typesTable->find('all')
            ->contain([
                'Products'=>[
                    'queryBuilder' => function ($q) {
                        $q->where(['Products.featured' => true]);
                        $q->limit(12);
                        return $q;
                    }
                ]
            ])
            ->where(['status'=>1])
            ->order(['id'=>'asc'])->all();

        $productsArrivals = $typesTable->find('all')
            ->contain([
                'Products'=>[
                    'queryBuilder' => function ($q) {
                       $q->where(['Products.new_arrivals' => true]);
                       $q->limit(12);
                        return $q;
                    }
                ]
            ])
            ->where(['status'=>1])
            ->order(['id'=>'asc'])
            ->all();

        $this->set(compact('types', 'varios', 'categories', 'products', 'productsArrivals'));
    }
}
