<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * BillingAddress Controller
 *
 * @method \App\Model\Entity\BillingAddres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BillingAddressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $billingAddress = $this->paginate($this->BillingAddress);

        $this->set(compact('billingAddress'));
    }

    /**
     * View method
     *
     * @param string|null $id Billing Addres id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $billingAddres = $this->BillingAddress->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('billingAddres'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $billingAddres = $this->BillingAddress->newEmptyEntity();
        if ($this->request->is('post')) {
            $billingAddres = $this->BillingAddress->patchEntity($billingAddres, $this->request->getData());
            if ($this->BillingAddress->save($billingAddres)) {
                $data = [
                    'error' => 'success',
                    'message' => 'Dirección de facturación registrado correctamente'
                ];
            }else{
                $data = [
                    'error' => 'ERROR',
                    'message' => 'No se pudo registrar la dirección de facturación, inténtelo nuevamente'
                ];
            }

            $this->set(compact('data'));
            $this->viewBuilder()->setOption('serialize', 'data');
        }
        $countries = $this->BillingAddress->Countries->find('list');
        $this->set(compact('billingAddres', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Billing Addres id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $billingAddres = $this->BillingAddress->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $billingAddres = $this->BillingAddress->patchEntity($billingAddres, $this->request->getData());
            if ($this->BillingAddress->save($billingAddres)) {
                $this->Flash->success(__('The billing addres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The billing addres could not be saved. Please, try again.'));
        }
        $this->set(compact('billingAddres'));
    }

    public function getData($user_id = null){
        $billing = $this->BillingAddress->find('all')
            //->contain('Countries')
            ->where(['user_id' => $user_id])
            ->all();

        //debug($shipping); exit();

        $this->set(compact('billing'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Billing Addres id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $billingAddres = $this->BillingAddress->get($id);
        if ($this->BillingAddress->delete($billingAddres)) {
            $this->Flash->success(__('The billing addres has been deleted.'));
        } else {
            $this->Flash->error(__('The billing addres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
