<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 10:57 PM
 */

class Device extends AppModel {

    /*public $hasMany = array(
        'DeviceQuestion' => array(
            'className' => 'DeviceQuestion'
        )
    );*/

    public $hasMany = 'DeviceQuestion';

    /*public function getQuestions($deviceId = null){
        $questions = $this->find('question', array(
            'conditions' => array('device_id' => $deviceId)
        ));
        return $questions;
    }*/

}