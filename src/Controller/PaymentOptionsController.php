<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaymentOptions Controller
 *
 * @property \App\Model\Table\PaymentOptionsTable $PaymentOptions
 *
 * @method \App\Model\Entity\PaymentOption[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaymentOptionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $paymentOptions = $this->paginate($this->PaymentOptions);

        $this->set(compact('paymentOptions'));
    }

    /**
     * View method
     *
     * @param string|null $id Payment Option id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paymentOption = $this->PaymentOptions->get($id, [
            'contain' => ['Payments'],
        ]);

        $this->set('paymentOption', $paymentOption);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paymentOption = $this->PaymentOptions->newEntity();
        if ($this->request->is('post')) {
            $paymentOption = $this->PaymentOptions->patchEntity($paymentOption, $this->request->getData());
            if ($this->PaymentOptions->save($paymentOption)) {
                $this->Flash->success(__('The {0} has been saved.', 'Payment Option'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment Option'));
        }
        $this->set(compact('paymentOption'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Payment Option id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paymentOption = $this->PaymentOptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paymentOption = $this->PaymentOptions->patchEntity($paymentOption, $this->request->getData());
            if ($this->PaymentOptions->save($paymentOption)) {
                $this->Flash->success(__('The {0} has been saved.', 'Payment Option'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Payment Option'));
        }
        $this->set(compact('paymentOption'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Payment Option id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paymentOption = $this->PaymentOptions->get($id);
        if ($this->PaymentOptions->delete($paymentOption)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Payment Option'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Payment Option'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
