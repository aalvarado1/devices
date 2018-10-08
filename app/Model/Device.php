<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 10:57 PM
 */

class Device extends AppModel {

    public $validate = array(
        'name' => array(
            'rule' => 'notBlank'
        )
    );

}