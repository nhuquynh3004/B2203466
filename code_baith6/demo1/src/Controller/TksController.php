<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tks Controller
 *
 * @property \App\Model\Table\TksTable $Tks
 *
 * @method \App\Model\Entity\Tk[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TksController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Majors'],
        ];
        $tks = $this->paginate($this->Tks);

        $this->set(compact('tks'));
    }

    /**
     * View method
     *
     * @param string|null $id Tk id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tk = $this->Tks->get($id, [
            'contain' => ['Majors'],
        ]);

        $this->set('tk', $tk);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tk = $this->Tks->newEntity();
        if ($this->request->is('post')) {
            $tk = $this->Tks->patchEntity($tk, $this->request->getData());
            if ($this->Tks->save($tk)) {
                $this->Flash->success(__('The tk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tk could not be saved. Please, try again.'));
        }
        $majors = $this->Tks->Majors->find('list', ['limit' => 200]);
        $this->set(compact('tk', 'majors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tk id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tk = $this->Tks->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tk = $this->Tks->patchEntity($tk, $this->request->getData());
            if ($this->Tks->save($tk)) {
                $this->Flash->success(__('The tk has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tk could not be saved. Please, try again.'));
        }
        $majors = $this->Tks->Majors->find('list', ['limit' => 200]);
        $this->set(compact('tk', 'majors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tk id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tk = $this->Tks->get($id);
        if ($this->Tks->delete($tk)) {
            $this->Flash->success(__('The tk has been deleted.'));
        } else {
            $this->Flash->error(__('The tk could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
