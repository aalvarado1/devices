<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/9/18
 * Time: 11:43 PM
 */

class DeviceQuestionsController extends AppController {
    public $helpers = array('Html', 'Form');
    var $questions = array('DeviceQuestion');

    public function index() {
        $this->set('devicesQuestions', $this->DeviceQuestion->find('all'));
        //$questions = $this->DeviceQuestion->find('all');
        //$questions = $this->Device->DeviceQuestion->getQuestions(1);
    }

}