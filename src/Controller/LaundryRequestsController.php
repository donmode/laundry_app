<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryRequests Controller
 *
 * @property \App\Model\Table\LaundryRequestsTable $LaundryRequests
 *
 * @method \App\Model\Entity\LaundryRequest[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryRequestsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Customers'],
        ];
        $laundryRequests = $this->paginate($this->LaundryRequests);

        $this->set(compact('laundryRequests'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Request id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->autoRender = false;
        $this->viewBuilder()->setLayout('guest');
        
        $laundryRequest = $this->LaundryRequests->get($id, [
            'contain' => ['Users', 'Customers', 'Payments'=>'PaymentOptions', 'LaundryRequestItems'=>['Items'=>'Prices']],
        ]);

        $this->set('laundryRequest', $laundryRequest);
        if($this->request->data['receipt']){
            $this->viewBuilder()->setLayout('print');
            $receipt = true;
            $this->set(compact('receipt'));
            $printPage = $this->render('view', false);
            $filename = "receipt";
            $this->writeToPDF($printPage, $filename);
        }
        if($this->request->data['invoice']){
            $this->viewBuilder()->setLayout('print');
            $invoice = true;
            $this->set(compact('invoice'));
            $printPage = $this->render('view', false);
            $filename = "invoice";
            $this->writeToPDF($printPage, $filename);
        }
        $this->render('view');
    }

    public function home($customer_id){
        $this->viewBuilder()->setLayout('guest');
        $this->set(compact('customer_id'));
    }

    public function checkRequest($customer_id) {

        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            $laundryRequest = $this->LaundryRequests->find()->where(['customer_id'=>$customer_id, 'id'=>$this->request->data['id']]);
            if ($laundryRequest = $laundryRequest->first()) {
                return $this->redirect(['controller'=>'LaundryRequests','action'=>'view', $laundryRequest->id]);
            }
            $this->Flash->error(__('Record not found, please try again'));
        }
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($customer_id)
    {
        $this->viewBuilder()->setLayout('guest');
        $customer = $this->LaundryRequests->Customers->get((int)$customer_id);
        if(!$customer){
            $this->Flash->error(__('Customer\'s record not found'));
            return $this->redirect('/');
        }
        $laundryRequest = $this->LaundryRequests->newEntity();
        if ($this->request->is('post')) {
            // $laundryRequest = $this->LaundryRequests->patchEntity($laundryRequest, $this->request->getData());
            $laundryRequest->customer_id = $customer_id;
            $laundryRequest->user_id = $this->Auth->user()['id'];

            if ($request = $this->LaundryRequests->save($laundryRequest)) {
                $requestData = $this->request->data();
                $count = count($requestData['item']);
                $data = [];
                for($i = 0; $i<$count; $i++){
                    $data[$i]['laundry_request_id'] = $request->id;
                    $data[$i]['item_id'] = (int)$requestData['item'][$i];
                    $data[$i]['quantity'] = (int)$requestData['quantity'][$i];
                    $data[$i]['fabric_condition'] = $requestData['condition'][$i];
                }
                $LaundryRequestItems = $this->LaundryRequests->LaundryRequestItems->newEntities($data);
                $LaundryRequestItems = $this->LaundryRequests->LaundryRequestItems->saveMany($LaundryRequestItems);
                
                if($LaundryRequestItems){
                    $this->Flash->success(__('The {0} has been saved.', 'Laundry Request'));
                    return $this->redirect(['action' => 'view', $request->id]);
                }
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laundry Request'));
        }
        $items = $this->LaundryRequests->LaundryRequestItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('laundryRequest', 'items'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Laundry Request id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryRequest = $this->LaundryRequests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryRequest = $this->LaundryRequests->patchEntity($laundryRequest, $this->request->getData());
            if ($this->LaundryRequests->save($laundryRequest)) {
                $this->Flash->success(__('The {0} has been saved.', 'Laundry Request'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laundry Request'));
        }
        $users = $this->LaundryRequests->Users->find('list', ['limit' => 200]);
        $customers = $this->LaundryRequests->Customers->find('list', ['limit' => 200]);
        $this->set(compact('laundryRequest', 'users', 'customers'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Laundry Request id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryRequest = $this->LaundryRequests->get($id);
        if ($this->LaundryRequests->delete($laundryRequest)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Laundry Request'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Laundry Request'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
