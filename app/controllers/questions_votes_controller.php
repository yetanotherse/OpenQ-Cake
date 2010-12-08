<?php
class QuestionsVotesController extends AppController {

	var $name = 'QuestionsVotes';
	var $helpers = array('Qhelper');

	function index() {
		$this->QuestionsVote->recursive = 0;
		$this->set('questionsVotes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions vote', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsVote', $this->QuestionsVote->read(null, $id));
	}

	function up() {
		if($this->RequestHandler->isGet() && $this->Session->read('Auth.User')) {
			$this->data['user_id'] = $this->params['named']['uid'];
			$this->data['question_id'] = $this->params['named']['qid'];
			$this->data['type'] = 'up';
			$this->QuestionsVote->create();
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The vote has been saved', 'modal', array('class' => 'modal success')));
			} else {
				$this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
			}
			$this->QuestionsVote->recursive = -1;
			$this->set('votes',  $this->QuestionsVote->find('all', array('conditions' => array('QuestionsVote.question_id' => $this->params['named']['qid']))));
			$this->autoRender = false;
			//$this->autoLayout = false;
			$this->render('/elements/qvote_up');
		}
	}

	function down() {
		if($this->RequestHandler->isGet() && $this->Session->read('Auth.User')) {
			$this->data['user_id'] = $this->params['named']['uid'];
			$this->data['question_id'] = $this->params['named']['qid'];
			$this->data['type'] = 'down';
			$this->QuestionsVote->create();
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The vote has been saved', 'modal', array('class' => 'modal success')));
			} else {
				$this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
			}
			$this->QuestionsVote->recursive = -1;
			$this->set('votes',  $this->QuestionsVote->find('all', array('conditions' => array('QuestionsVote.question_id' => $this->params['named']['qid']))));
			$this->autoRender = false;
			//$this->autoLayout = false;
			$this->render('/elements/qvote_down');
		}	
	}

	function add() {
		if (!empty($this->data)) {
			$this->QuestionsVote->create();
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The questions vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions vote could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsVote->Question->find('list');
		$users = $this->QuestionsVote->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions vote', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The questions vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsVote->read(null, $id);
		}
		$questions = $this->QuestionsVote->Question->find('list');
		$users = $this->QuestionsVote->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsVote->delete($id)) {
			$this->Session->setFlash(__('Questions vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions vote was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function manage_index() {
		$this->QuestionsVote->recursive = 0;
		$this->set('questionsVotes', $this->paginate());
	}

	function manage_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions vote', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsVote', $this->QuestionsVote->read(null, $id));
	}

	function manage_add() {
		if (!empty($this->data)) {
			$this->QuestionsVote->create();
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The questions vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions vote could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsVote->Question->find('list');
		$users = $this->QuestionsVote->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function manage_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions vote', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsVote->save($this->data)) {
				$this->Session->setFlash(__('The questions vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsVote->read(null, $id);
		}
		$questions = $this->QuestionsVote->Question->find('list');
		$users = $this->QuestionsVote->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function manage_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsVote->delete($id)) {
			$this->Session->setFlash(__('Questions vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions vote was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
