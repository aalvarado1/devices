<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/9/18
 * Time: 10:27 PM
 */

class DeviceQuestion extends AppModel {

    /*public $belongsTo = array(
        'Device' => array(
            'className' => 'Device'
        )
    );*/

    public $belongsTo = 'Device';

    public function getQuestions($deviceId = null){
        $questions = $this->find('all', array(
            'conditions' => array('device_id' => $deviceId)
        ));
        return $questions;
    }

}