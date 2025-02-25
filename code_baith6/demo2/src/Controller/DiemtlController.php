<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Diemtl Controller
 *
 * @property \App\Model\Table\DiemtlTable $Diemtl
 *
 * @method \App\Model\Entity\Diemtl[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DiemtlController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $diemtl = $this->paginate(
            $this->Diemtl->find()->order(['diem_tich_luy' => 'DESC']));

        $this->set(compact('diemtl'));
    
        }
    /**
     * View method
     *
     * @param string|null $id Diemtl id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $diemtl = $this->Diemtl->get($id, [
            'contain' => [],
        ]);

        $this->set('diemtl', $diemtl);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $diemtl = $this->Diemtl->newEntity();
        if ($this->request->is('post')) {
            $diemtl = $this->Diemtl->patchEntity($diemtl, $this->request->getData());
            if ($this->Diemtl->save($diemtl)) {
                $this->Flash->success(__('The diemtl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diemtl could not be saved. Please, try again.'));
        }
        $this->set(compact('diemtl'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Diemtl id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $diemtl = $this->Diemtl->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $diemtl = $this->Diemtl->patchEntity($diemtl, $this->request->getData());
            if ($this->Diemtl->save($diemtl)) {
                $this->Flash->success(__('The diemtl has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The diemtl could not be saved. Please, try again.'));
        }
        $this->set(compact('diemtl'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Diemtl id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $diemtl = $this->Diemtl->get($id);
        if ($this->Diemtl->delete($diemtl)) {
            $this->Flash->success(__('The diemtl has been deleted.'));
        } else {
            $this->Flash->error(__('The diemtl could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
