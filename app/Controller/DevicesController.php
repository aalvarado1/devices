<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 11:00 PM
 */

class DevicesController extends AppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('devices', $this->Device->find('all'));
    }
}