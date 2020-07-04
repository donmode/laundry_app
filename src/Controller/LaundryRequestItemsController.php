<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LaundryRequestItems Controller
 *
 * @property \App\Model\Table\LaundryRequestItemsTable $LaundryRequestItems
 *
 * @method \App\Model\Entity\LaundryRequestItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LaundryRequestItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['LaundryRequests', 'Items'],
        ];
        $laundryRequestItems = $this->paginate($this->LaundryRequestItems);

        $this->set(compact('laundryRequestItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Laundry Request Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $laundryRequestItem = $this->LaundryRequestItems->get($id, [
            'contain' => ['LaundryRequests', 'Items'],
        ]);

        $this->set('laundryRequestItem', $laundryRequestItem);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $laundryRequestItem = $this->LaundryRequestItems->newEntity();
        if ($this->request->is('post')) {
            $laundryRequestItem = $this->LaundryRequestItems->patchEntity($laundryRequestItem, $this->request->getData());
            if ($this->LaundryRequestItems->save($laundryRequestItem)) {
                $this->Flash->success(__('The {0} has been saved.', 'Laundry Request Item'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laundry Request Item'));
        }
        $laundryRequests = $this->LaundryRequestItems->LaundryRequests->find('list', ['limit' => 200]);
        $items = $this->LaundryRequestItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('laundryRequestItem', 'laundryRequests', 'items'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Laundry Request Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $laundryRequestItem = $this->LaundryRequestItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $laundryRequestItem = $this->LaundryRequestItems->patchEntity($laundryRequestItem, $this->request->getData());
            if ($this->LaundryRequestItems->save($laundryRequestItem)) {
                $this->Flash->success(__('The {0} has been saved.', 'Laundry Request Item'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Laundry Request Item'));
        }
        $laundryRequests = $this->LaundryRequestItems->LaundryRequests->find('list', ['limit' => 200]);
        $items = $this->LaundryRequestItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('laundryRequestItem', 'laundryRequests', 'items'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Laundry Request Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $laundryRequestItem = $this->LaundryRequestItems->get($id);
        if ($this->LaundryRequestItems->delete($laundryRequestItem)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Laundry Request Item'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Laundry Request Item'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
