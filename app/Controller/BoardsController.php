<?php

class BoardsController extends AppController {

	public $helper = array('Html', 'Form');
	public $components = array('Session');

	public function index() {

		if ($this->request->is('post')) {
			if ($this->Board->save($this->request->data)) {
				$this->Session->setFlash('記事を投稿しました');
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash('記事の投稿が失敗しました');
			}
		}

		//debug($this->request);

		$this->set('boards', $this->Board->find('all',array(
				'order' => 'Board.id DESC',
                'limit' => '10'

		)));
	}


}
?>