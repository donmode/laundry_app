<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Payments Controller
 *
 * @property \App\Model\Table\PaymentsTable $Payments
 *
 * @method \App\Model\Entity\Payment[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PaymentOptions'],
        ];
        $payments = $this->paginate($this->Payments);

        $this->set(compact('payments'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $payment = $this->Payments->get($id, [
            'contain' => ['PaymentOptions', 'LaundryRequests'],
        ]);

        $this->set('payment', $payment);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($request_id)
    {
        $this->viewBuilder()->setLayout('guest');
        $laundryRequest = $this->Payments->LaundryRequests->get($request_id);
        if(!$laundryRequest){
            $this->Flash->error(__('You are not allowed to access this resource'));
            return $this->redirect('/');
        }
        $hasPaid = $this->Payments->find()->where(['laundry_request_id'=>$request_id]);
        if($hasPaid = $hasPaid->first()){
            return $this->redirect(['action'=>'edit', $hasPaid->id]);
        }
        //PAY FOR A REQUEST
        $payment = $this->Payments->newEntity();
        if ($this->request->is('post')) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            $payment->laundry_request_id = $request_id;
            if ($paid = $this->Payments->save($payment)) {
                $laundryRequest->payment_id = $paid->id;
                $this->Payments->LaundryRequests->save($laundryRequest);
                $this->Flash->success(__('The {0} has been saved.', 'Payment'));
                return $this->redirect(['controller'=>'LaundryRequests','action' => 'view', $request_id]);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment'));
        }
        $paymentOptions = $this->Payments->PaymentOptions->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'paymentOptions'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id)
    {
        $this->viewBuilder()->setLayout('guest');
        $payment = $this->Payments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $payment = $this->Payments->patchEntity($payment, $this->request->getData());
            if ($this->Payments->save($payment)) {
                $this->Flash->success(__('The {0} has been saved.', 'Payment'));
                return $this->redirect(['controller'=>'LaundryRequests','action' => 'view', $payment->laundry_request_id]);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment'));
        }
        $paymentOptions = $this->Payments->PaymentOptions->find('list', ['limit' => 200]);
        $this->set(compact('payment', 'paymentOptions'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Payment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $payment = $this->Payments->get($id);
        if ($this->Payments->delete($payment)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Payment'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Payment'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
