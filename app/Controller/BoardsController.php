<?php

class BoardsController extends AppController {

	public $helper = array('Html', 'Form');

	public function index() {
		$this->set('boards', $this->Board->find('all'));
	}
}

?>