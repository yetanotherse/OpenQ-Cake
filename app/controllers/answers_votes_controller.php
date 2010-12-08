<?php
class AnswersVotesController extends AppController {

	var $name = 'AnswersVotes';
        var $helpers = array('Qhelper');

	function index() {
		$this->AnswersVote->recursive = 0;
		$this->set('answersVotes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answers vote', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answersVote', $this->AnswersVote->read(null, $id));
	}

        function up() {
                if($this->RequestHandler->isGet() && $this->Session->read('Auth.User')) {
                        $this->data['user_id'] = $this->params['named']['uid'];
                        $this->data['answer_id'] = $this->params['named']['aid'];
                        $this->data['type'] = 'up';
                        $this->AnswersVote->create();
                        if ($this->AnswersVote->save($this->data)) {
                                $this->Session->setFlash(__('The vote has been saved', 'modal', array('class' => 'modal success')));
                        } else {
                                $this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
                        }
                        $this->AnswersVote->recursive = -1;
                        $this->set('votes',  $this->AnswersVote->find('all', array('conditions' => array('AnswersVote.answer_id' => $this->params['named']['aid']))));
                        $this->autoRender = false;
                        //$this->autoLayout = false;
                        $this->render('/elements/avote_up');
                }
        }

        function down() {
                if($this->RequestHandler->isGet() && $this->Session->read('Auth.User')) {
                        $this->data['user_id'] = $this->params['named']['uid'];
                        $this->data['answer_id'] = $this->params['named']['aid'];
                        $this->data['type'] = 'down';
                        $this->AnswersVote->create();
                        if ($this->AnswersVote->save($this->data)) {
                                $this->Session->setFlash(__('The vote has been saved', 'modal', array('class' => 'modal success')));
                        } else {
                                $this->Session->setFlash(__('The vote could not be saved. Please, try again.', true));
                        }
                        $this->AnswersVote->recursive = -1;
                        $this->set('votes',  $this->AnswersVote->find('all', array('conditions' => array('AnswersVote.answer_id' => $this->params['named']['aid']))));
                        $this->autoRender = false;
                        //$this->autoLayout = false;
                        $this->render('/elements/avote_down');
                }
        }

	function add() {
		if (!empty($this->data)) {
			$this->AnswersVote->create();
			if ($this->AnswersVote->save($this->data)) {
				$this->Session->setFlash(__('The answers vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers vote could not be saved. Please, try again.', true));
			}
		}
		$answers = $this->AnswersVote->Answer->find('list');
		$users = $this->AnswersVote->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answers vote', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswersVote->save($this->data)) {
				$this->Session->setFlash(__('The answers vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswersVote->read(null, $id);
		}
		$answers = $this->AnswersVote->Answer->find('list');
		$users = $this->AnswersVote->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answers vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswersVote->delete($id)) {
			$this->Session->setFlash(__('Answers vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answers vote was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function manage_index() {
		$this->AnswersVote->recursive = 0;
		$this->set('answersVotes', $this->paginate());
	}

	function manage_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid answers vote', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('answersVote', $this->AnswersVote->read(null, $id));
	}

	function manage_add() {
		if (!empty($this->data)) {
			$this->AnswersVote->create();
			if ($this->AnswersVote->save($this->data)) {
				$this->Session->setFlash(__('The answers vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers vote could not be saved. Please, try again.', true));
			}
		}
		$answers = $this->AnswersVote->Answer->find('list');
		$users = $this->AnswersVote->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function manage_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid answers vote', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AnswersVote->save($this->data)) {
				$this->Session->setFlash(__('The answers vote has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The answers vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AnswersVote->read(null, $id);
		}
		$answers = $this->AnswersVote->Answer->find('list');
		$users = $this->AnswersVote->User->find('list');
		$this->set(compact('answers', 'users'));
	}

	function manage_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for answers vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AnswersVote->delete($id)) {
			$this->Session->setFlash(__('Answers vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Answers vote was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
