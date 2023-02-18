<?php
namespace App\Controller;

use App\Controller\AppController;

class CheckoutController extends AppController{
    public function add(){
        $countriesTable = $this->getTableLocator()->get('Countries');
        $usersTable = $this->getTableLocator()->get('Users');

        $result = $this->Authentication->getResult();
        $userLogin = $result->getData();

        $user = $usersTable->get($userLogin->id, [
            'contain' => ['ShippingAddress', 'BillingAddress']
        ]);

        $order = $this->Checkout->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Checkout->patchEntity($order, $this->request->getData());

            //debug($user); exit();

            if ($this->Checkout->save($order)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }

        $countries = $countriesTable->find('list');

        $this->set(compact('order', 'user', 'countries'));
    }
}
