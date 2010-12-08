<?php
class AnswersCommentsController extends AppController {

	var $name = 'AnswersComments';

	function index() {
		$this->AnswersComment->recursive = 0;
		$this->set('answersComments', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answers comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answersComment', $this->AnswersComment->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AnswersComment->create();
			if ($this->AnswersComment->save($this->data)) {
				$this->Session->setFlash(__('The answers comment has been saved', true));
				$this->redirect(array('conroller' => 'questions', 'action' => 'view', $this->data['AnswersComment']['question_id']));
			} else {
				$this->Session->setFlash(__('The answers comment could not be saved. Please, try again.', true));
			}
		}
		$answers = $this->AnswersComment->Answer->find('list');
		$users = $this->AnswersComment->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answers comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswersComment->save($this->data)) {
				$this->Session->setFlash(__('The answers comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswersComment->read(null, $id);
		}
		$answers = $this->AnswersComment->Answer->find('list');
		$users = $this->AnswersComment->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answers comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswersComment->delete($id)) {
			$this->Session->setFlash(__('Answers comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answers comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function manage_index() {
		$this->AnswersComment->recursive = 0;
		$this->set('answersComments', $this->paginate());
	}

	function manage_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answers comment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answersComment', $this->AnswersComment->read(null, $id));
	}

	function manage_add() {
		if (!empty($this->data)) {
			$this->AnswersComment->create();
			if ($this->AnswersComment->save($this->data)) {
				$this->Session->setFlash(__('The answers comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers comment could not be saved. Please, try again.', true));
			}
		}
		$answers = $this->AnswersComment->Answer->find('list');
		$users = $this->AnswersComment->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function manage_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answers comment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswersComment->save($this->data)) {
				$this->Session->setFlash(__('The answers comment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers comment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswersComment->read(null, $id);
		}
		$answers = $this->AnswersComment->Answer->find('list');
		$users = $this->AnswersComment->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function manage_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answers comment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswersComment->delete($id)) {
			$this->Session->setFlash(__('Answers comment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answers comment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
