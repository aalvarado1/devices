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
    //var $uses = array('DeviceQuestion', 'FinishedDocument');
    //public $finishedDocuments = array('FinishedDocument');

    public function index() {
        $this->set('devices', $this->Device->find('all'));
        $this->set('devicesQuestions', $this->Device->DeviceQuestion->find('all'));
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Device->create();
            if ($this->Device->save($this->request->data)) {
                $this->Flash->success(__('You have added a new device.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Flash->error(__('Unable to save new device.'));
        }
    }

    public function saveFile() {
        $this->loadModel('FinishedDocument');
        if ($this->request->is('post')) {
            //$this->set('finishedDocuments', $this->FinishedDocument->find('all'));
            $this->FinishedDocument->create();
            if ($this->FinishedDocument->save($this->request->data)) {
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