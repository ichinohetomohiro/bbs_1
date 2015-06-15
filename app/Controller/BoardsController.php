<?php

class BoardsController extends AppController {

	public $helper = array('Html', 'Form');

	public function index() {

		if ($this->request->is('post')) {
			if ($this->Board->save($this->request->data)) {
				echo ('記事を投稿しました');
				$this->redirect(array('action'=>'index'));
			} else {
				echo ('記事の投稿に失敗しました');
			}
		}

		//debug($this->request);

		$this->set('boards', $this->Board->find('all',array(
				'order' => 'Board.id DESC',
                'limit' => '5'

		)));
	}


}
?>