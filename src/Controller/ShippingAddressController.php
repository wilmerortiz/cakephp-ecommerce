<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ShippingAddress Controller
 *
 * @method \App\Model\Entity\ShippingAddres[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShippingAddressController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $shippingAddress = $this->paginate($this->ShippingAddress);

        $this->set(compact('shippingAddress'));
    }

    /**
     * View method
     *
     * @param string|null $id Shipping Addres id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shippingAddres = $this->ShippingAddress->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('shippingAddres'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shippingAddres = $this->ShippingAddress->newEmptyEntity();
        if ($this->request->is('post')) {
            $shippingAddres = $this->ShippingAddress->patchEntity($shippingAddres, $this->request->getData());
            if ($this->ShippingAddress->save($shippingAddres)) {
                $data = [
                    'error' => 'success',
                    'message' => 'Dirección de envío registrado correctamente'
                ];
            }else{
                $data = [
                    'error' => 'ERROR',
                    'message' => 'No se pudo registrar la dirección de envío, inténtelo nuevamente'
                ];
            }

            $this->set(compact('data'));
            $this->viewBuilder()->setOption('serialize', 'data');

        }

        $countries = $this->ShippingAddress->Countries->find('list');
        $this->set(compact('shippingAddres', 'countries'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Shipping Addres id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shippingAddres = $this->ShippingAddress->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shippingAddres = $this->ShippingAddress->patchEntity($shippingAddres, $this->request->getData());
            if ($this->ShippingAddress->save($shippingAddres)) {
                $this->Flash->success(__('The shipping addres has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shipping addres could not be saved. Please, try again.'));
        }
        $this->set(compact('shippingAddres'));
    }

    public function getData($user_id = null){
        $shipping = $this->ShippingAddress->find('all')
            //->contain('Countries')
            ->where(['user_id' => $user_id])
            ->all();

        //debug($shipping); exit();

        $this->set(compact('shipping'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Shipping Addres id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shippingAddres = $this->ShippingAddress->get($id);
        if ($this->ShippingAddress->delete($shippingAddres)) {
            $this->Flash->success(__('The shipping addres has been deleted.'));
        } else {
            $this->Flash->error(__('The shipping addres could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
