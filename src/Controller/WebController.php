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

        $types = $typesTable->find('all')
            ->where(['status'=>1])
            ->order(['id'=>'asc'])
            ->limit(2);

        $varios = $connection->newQuery()
            ->select('title, description, icono')
            ->from('varios')
            ->where(['status' => 1])
            ->order(['id'=>'asc'])
            ->execute()
            ->fetchAll('assoc');

        $this->set(compact('types', 'varios'));
    }
}
