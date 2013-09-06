<?php
App::uses('AppModel', 'Model');

class Todo extends AppModel {
	public $validate = array(
		'description' => array(
			'required' => true,
			'rule' => array('minLength', 2),
			'message' => 'Needs to be at least 2 characters long'
		)
	);
}
