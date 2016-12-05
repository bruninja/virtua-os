<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Recibo Controller
 *
 * @property \App\Model\Table\ReciboTable $Recibo
 */
class ReciboController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Servico', 'Cliente']
        ];
        $recibo = $this->paginate($this->Recibo);

        $this->set(compact('recibo'));
        $this->set('_serialize', ['recibo']);
    }

    /**
     * View method
     *
     * @param string|null $id Recibo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recibo = $this->Recibo->get($id, [
            'contain' => ['Servico', 'Cliente']
        ]);

        $this->set('recibo', $recibo);
        $this->set('_serialize', ['recibo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recibo = $this->Recibo->newEntity();
        if ($this->request->is('post')) {
            $recibo = $this->Recibo->patchEntity($recibo, $this->request->data);
            if ($this->Recibo->save($recibo)) {
                $this->Flash->success(__('The recibo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recibo could not be saved. Please, try again.'));
            }
        }
        $servico = $this->Recibo->Servico->find('list', ['limit' => 200]);
        $cliente = $this->Recibo->Cliente->find('list', ['limit' => 200]);
        $this->set(compact('recibo', 'servico', 'cliente'));
        $this->set('_serialize', ['recibo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recibo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recibo = $this->Recibo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recibo = $this->Recibo->patchEntity($recibo, $this->request->data);
            if ($this->Recibo->save($recibo)) {
                $this->Flash->success(__('The recibo has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The recibo could not be saved. Please, try again.'));
            }
        }
        $servico = $this->Recibo->Servico->find('list', ['limit' => 200]);
        $cliente = $this->Recibo->Cliente->find('list', ['limit' => 200]);
        $this->set(compact('recibo', 'servico', 'cliente'));
        $this->set('_serialize', ['recibo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recibo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recibo = $this->Recibo->get($id);
        if ($this->Recibo->delete($recibo)) {
            $this->Flash->success(__('The recibo has been deleted.'));
        } else {
            $this->Flash->error(__('The recibo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
