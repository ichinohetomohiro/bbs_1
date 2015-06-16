<?php


class Board extends AppModel {

	public $validate = array(
			'title' => array(
				'title-rule1' => array(
						'rule' => 'notEmpty',
						'message' => 'タイトルを入力してください。最大文字数は40文字です。（半角）'
				),
				'title-rule2' => array(
						'rule' => array('validation_max_width', 40),
						'message' => '最大文字数は半角%s文字です。（全角20文字）'
				)
			),
			'name' => array(
				'name-rule1' => array(
						'rule' => 'notEmpty',
						'message' => '名前を入力してください'
				),
				'name-rule2' => array(
						'rule' => array('maxLength', 20),
						'message' => '最大文字数は%s文字です。（全角半角問わず）'
				)
			),
			'message' => array(
				'message-rule1' => array(
					'rule' => 'notEmpty',
					'message' => '本文を入力してください'
				),
				'message-rule2' => array(
					'rule' => array('validation_max_width', 40),
					'message' => '最大文字数は%s文字です。（半角）'
				)
			)
	);

	public static function validation_max_width($rule_name,$limit)
	{
// 		debug($limit);
// 		debug($message);

		$key = key($rule_name);

		$mesage_value = mb_strwidth($rule_name[$key],'UTF-8');

		return $mesage_value <= $limit;

	}

}


