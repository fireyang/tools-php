<?php
class TasksController extends AppController {

	var $name = 'Tasks';
	var $helpers = array('Html', 'Form','Task');

	function index() {
	    Configure::write('debug', 0);
		$this->Task->recursive = 0;
		$this->set('tasks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Task.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('task', $this->Task->read(null, $id));
	}

	function add() {
	    if($this->RequestHandler->isAjax()){ 
	        $this->layout = 'json';
	    }
		/*if (!empty($this->data)) {
			$this->Task->create();
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		$tags = $this->Task->Tag->find('list');
		$users = $this->Task->User->find('list');
		$lists = $this->Task->Tlist->find('list');
		$locations = $this->Task->Location->find('list');*/
		$data = $this->RequestHandler->isAjax();//$this->params['form'];
		$this->set(compact("data"));
		//$this->set(compact('tags', 'users', 'lists', 'locations'));
	}
	
	//function test(){
	//    
	//}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Task->read(null, $id);
		}
		$tags = $this->Task->Tag->find('list');
		$users = $this->Task->User->find('list');
		$lists = $this->Task->List->find('list');
		$locations = $this->Task->Location->find('list');
		$this->set(compact('tags','users','lists','locations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Task->del($id)) {
			$this->Session->setFlash(__('Task deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>
