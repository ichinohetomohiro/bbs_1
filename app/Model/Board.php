<?php

class Board extends AppModel {

	public $validate = array(
			'Board' => array(
					'rule_name' => array(
							'rule' => 'alphaNumeric',
							'required' => true,
							'allowEmpty' => false,
							'message' => '表示するエラーメッセージ'
					)
				)
			);
}