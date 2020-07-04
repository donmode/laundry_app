<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Prices Controller
 *
 * @property \App\Model\Table\PricesTable $Prices
 *
 * @method \App\Model\Entity\Price[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PricesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items'],
        ];
        $prices = $this->paginate($this->Prices);

        $this->set(compact('prices'));
    }

    /**
     * View method
     *
     * @param string|null $id Price id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $price = $this->Prices->get($id, [
            'contain' => ['Items'],
        ]);

        $this->set('price', $price);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $price = $this->Prices->newEntity();
        if ($this->request->is('post')) {
            $price = $this->Prices->patchEntity($price, $this->request->getData());
            if ($this->Prices->save($price)) {
                $this->Flash->success(__('The {0} has been saved.', 'Price'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Price'));
        }
        $items = $this->Prices->Items->find('list', ['limit' => 200]);
        $this->set(compact('price', 'items'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Price id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $price = $this->Prices->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $price = $this->Prices->patchEntity($price, $this->request->getData());
            if ($this->Prices->save($price)) {
                $this->Flash->success(__('The {0} has been saved.', 'Price'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Price'));
        }
        $items = $this->Prices->Items->find('list', ['limit' => 200]);
        $this->set(compact('price', 'items'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Price id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $price = $this->Prices->get($id);
        if ($this->Prices->delete($price)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Price'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Price'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
