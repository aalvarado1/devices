<?php
/**
 * Created by PhpStorm.
 * User: armandoalvarado
 * Date: 10/3/18
 * Time: 11:00 PM
 */

class FinishedDocumentsController extends AppController {

    public $helpers = array('Html', 'Form', 'Scriptaculous');



    public function index() {
        $this->set('finishedDocs', $this->FinishedDocument->find('all'));
    }

    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid document Id'));
        }
        $finishedDoc = $this->FinishedDocument->findById($id);
        if (!$finishedDoc) {
            throw new NotFoundException(__('Document not found'));
        }
        $this->set('finishedDoc', $finishedDoc);
    }

}