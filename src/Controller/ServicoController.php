<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Servico Controller
 *
 * @property \App\Model\Table\ServicoTable $Servico
 */
class ServicoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $servico = $this->paginate($this->Servico);

        $this->set(compact('servico'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * View method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => ['Recibo']
        ]);

        $this->set('servico', $servico);
        $this->set('_serialize', ['servico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $servico = $this->Servico->newEntity();
        if ($this->request->is('post')) {
            $servico = $this->Servico->patchEntity($servico, $this->request->data);
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('O servico foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O servico não pode ser salvo, Por favor, tente novamente'));
            }
        }
        $this->set(compact('servico'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $servico = $this->Servico->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $servico = $this->Servico->patchEntity($servico, $this->request->data);
            if ($this->Servico->save($servico)) {
                $this->Flash->success(__('O servico foi salvo.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('O servico não pode ser salvo, Por favor, tente novamente'));
            }
        }
        $this->set(compact('servico'));
        $this->set('_serialize', ['servico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Servico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $servico = $this->Servico->get($id);
        if ($this->Servico->delete($servico)) {
            $this->Flash->success(__('O servico has been deleted.'));
        } else {
            $this->Flash->error(__('O servico could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
