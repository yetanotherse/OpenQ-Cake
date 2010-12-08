<?php
class QuestionsCommentsController extends AppController {

	var $name = 'QuestionsComments';

	function index() {
		$this->QuestionsComment->recursive = 0;
		$this->set('questionsComments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsComment', $this->QuestionsComment->read(null, $id));
	}

	function add() {
		debug($this->data);
		if (!empty($this->data)) {
			$this->QuestionsComment->create();
			if ($this->QuestionsComment->save($this->data)) {
				$this->Session->setFlash(__('Your comment has been added', true));
				$this->redirect(array('controller' => 'questions', 'action' => 'view', $this->data['QuestionsComment']['question_id']));
			} else {
				$this->Session->setFlash(__('The questions comment could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsComment->Question->find('list');
		$users = $this->QuestionsComment->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsComment->save($this->data)) {
				$this->Session->setFlash(__('The questions comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsComment->read(null, $id);
		}
		$questions = $this->QuestionsComment->Question->find('list');
		$users = $this->QuestionsComment->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsComment->delete($id)) {
			$this->Session->setFlash(__('Questions comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function manage_index() {
		$this->QuestionsComment->recursive = 0;
		$this->set('questionsComments', $this->paginate());
	}

	function manage_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsComment', $this->QuestionsComment->read(null, $id));
	}

	function manage_add() {
		if (!empty($this->data)) {
			$this->QuestionsComment->create();
			if ($this->QuestionsComment->save($this->data)) {
				$this->Session->setFlash(__('The questions comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions comment could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsComment->Question->find('list');
		$users = $this->QuestionsComment->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function manage_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsComment->save($this->data)) {
				$this->Session->setFlash(__('The questions comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsComment->read(null, $id);
		}
		$questions = $this->QuestionsComment->Question->find('list');
		$users = $this->QuestionsComment->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function manage_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsComment->delete($id)) {
			$this->Session->setFlash(__('Questions comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
