<?php

class Post extends AppModel {
	public $hasMany = array(
		"Comment" => array(
			'className' => 'Comment',
			'dependent' => true
		)
	);

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => '入力してね'
		),
		'body' => array(
			'rule' => 'notEmpty',
			'message' => 'ぷんぷん'
		)
	);
}