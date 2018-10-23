<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 11:00 PM
 */

class DevicesController extends AppController {

    public $helpers = array('Html', 'Form', 'Scriptaculous');
    public $deviceQuestions = array('DeviceQuestion');


    public function index() {
        $this->set('devices', $this->Device->find('all'));
        $this->set('devicesQuestions', $this->Device->DeviceQuestion->find('all'));
    }


    public function saveFile() {
        $this->loadModel('FinishedDocument');
        $this->set('fileDocs', $this->request->data);
        if($this->request->is('post')) {
            if($this->FinishedDocument->save($this->request->data)) {
                $this->Flash->success(__('You have saved the document generated.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to save document.'));
        }

    }

    public function genFile() {
        $this->set('foos', $this->request->data['Device']);
        $this->set('devices', $this->Device->find('all'));
    }

}