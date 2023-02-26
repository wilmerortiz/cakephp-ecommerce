<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Datasource\ConnectionManager;
class CheckoutController extends AppController{
    public function add(){
        $countriesTable = $this->getTableLocator()->get('Countries');
        $usersTable = $this->getTableLocator()->get('Users');
        $orderDetailTable = $this->getTableLocator()->get('OrderDetails');

        $result = $this->Authentication->getResult();
        $userLogin = $result->getData();

        $user = $usersTable->get($userLogin->id, [
            'contain' => ['ShippingAddress', 'BillingAddress']
        ]);

        $order = $this->Checkout->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Checkout->patchEntity($order, $this->request->getData());

            //debug($user); exit();

            if ($result = $this->Checkout->save($order)) {
                $order_id = $result->id;
                foreach ($this->request->getData('product_id') as $k => $dt){
                    $detail = $orderDetailTable->newEmptyEntity();
                    $detail->order_id = $order_id;
                    $detail->producto_id = $this->request->getData('product_id')[$k];
                    $detail->cantidad = $this->request->getData('cantidad')[$k];
                    $detail->precio = $this->request->getData('precio')[$k];
                    $detail->transporte = $this->request->getData('transporte')[$k];
                    $detail->description = $this->request->getData('description')[$k];
                    $orderDetailTable->save($detail);
                }

                $data = [
                    'id' => $result->id,
                    'controller' => 'Checkout/imprimir',
                    'error' => 'success',
                    'message' => 'Pedido registrado correctamente'
                ];
            }else{
                $data = [
                    'id' => null,
                    'controller' => null,
                    'error' => 'ERROR',
                    'message' => 'No se pudo registrar el pedido, inténtelo nuevamente'
                ];
            }

            $this->set(compact('data'));
            $this->viewBuilder()->setOption('serialize', 'data');
        }

        $countries = $countriesTable->find('list');

        $this->set(compact('order', 'user', 'countries'));
    }

    public function imprimir($id = null){
        $connection = ConnectionManager::get('default');
        $this->viewBuilder()->enableAutoLayout(true);
        $invoice = $this->Checkout->get($id, [
            'contain' => ['Users', 'ShippingAddress'=>['Countries']]
        ]);

        $details = $connection->newQuery()
            ->select('product.name, product.image, cantidad, precio, transporte, od.description')
            ->from('order_details od')
            ->join([
                [
                    'table' => 'products',
                    'alias' => 'product',
                    'type' => 'INNER',
                    'conditions' => 'product.id = od.producto_id'
                ]
            ])
            ->where(['od.order_id' => $id])
            ->execute()
            ->fetchAll('assoc');

        $this->viewBuilder()->setClassName('CakePdf.Pdf');
        $this->viewBuilder()->setOption(
            'pdfConfig',
            [
                'orientation' => 'portrait',
                //'filename' => 'Invoice_' . $id.'.pdf'
            ]
        );

        $this->set(compact('invoice','details'));
    }
}
