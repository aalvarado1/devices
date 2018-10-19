<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/18/18
 * Time: 4:04 PM
 */

class FinishedDocumentsController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('finishedDocuments', $this->FinishedDocument->find('all'));
        //$questions = $this->DeviceQuestion->find('all');
        //$questions = $this->Device->DeviceQuestion->getQuestions(1);
    }

    public function saveFile() {
        /*if ($this->request->is('post')) {
            $this->FinishedDocument->create();
            if ($this->Device->FinishedDocument->save($this->request->data)) {
                $this->Flash->success(__('You have added a new device.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to save new device.'));
        }*/
        return $this->redirect(array('action' => 'index'));
    }
}