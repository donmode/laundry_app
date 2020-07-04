<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories'],
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Categories', 'LaundryRequests', 'Price'],
        ]);

        $this->set('item', $item);
    }

    public function getItems(){
        $excluded_ids = $this->request->input();
        $excluded_ids = explode(',', $excluded_ids);
        $items = $this->Items->find('list')->where(['id NOT IN'=>$excluded_ids]);
        $this->set([
            'items' => $items,
            '_serialize' => ['items']
        ]);
    }

    public function getItemsProperties($id){
        $item = $this->Items->find('all', ['contain'=>'Prices'])->where(['id'=>$id])->first();
        $this->set([
            'item' => $item,
            '_serialize' => ['item']
        ]);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The {0} has been saved.', 'Item'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Item'));
        }
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $this->set(compact('item', 'categories'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The {0} has been saved.', 'Item'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Item'));
        }
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $this->set(compact('item', 'categories'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Item'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Item'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
