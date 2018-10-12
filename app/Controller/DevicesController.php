<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 11:00 PM
 */

class DevicesController extends AppController {
    public $helpers = array('Html', 'Form');
    public $deviceQuestions = array('DeviceQuestion');

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

    public function genFile() {
        //$this->set('foos', $this->request->data['Device']['How old is your mom, hey?']);
        $this->set('foos', $this->request->data['Device']);

        /*if ($this->request->is('post')) {
            //$this->set('dataSet', $this->request->data);
            $foos = $this->request->data('fileName');
            //return $this->redirect(array('action' => 'genFile'));
        }
        return $foos;*/
    }
}