<?php

class TodosController extends AppController {
	public $helpers = array('Form');
	
    public function index() {
		$this->set('todos', $this->Todo->find('all', array('conditions' => array('Todo.resolved'=>false))));
	}

	public function add() {
		if($this->request->is('post')) {
			$this->Todo->create();
			if($this->Todo->save($this->request->data)) {
				return $this->redirect(array('action' => 'index'));
			}
		}
	}

	public function resolve($id) {
		if($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if(!$this->Todo->exists($id)) {
			throw new NotFoundException('Could not find your todo');
		}

		$this->Todo->id = $id;
		$this->Todo->saveField('resolved', true);
		return $this->redirect(array('action'=>'index'));
	}
}
