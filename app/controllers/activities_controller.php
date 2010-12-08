<?php
class ActivitiesController extends AppController {

	var $name = 'Activities';

	function index() {
		$this->Activity->recursive = 0;
		$this->set('activities', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid activity', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('activity', $this->Activity->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Activity->create();
			if ($this->Activity->save($this->data)) {
				$this->Session->setFlash(__('The activity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.', true));
			}
		}
		/*$questions = $this->Activity->Question->find('list');
		$answers = $this->Activity->Answer->find('list');
		$users = $this->Activity->User->find('list');
		$this->set(compact('questions', 'answers', 'users'));*/

		$users = $this->Activity->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid activity', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Activity->save($this->data)) {
				$this->Session->setFlash(__('The activity has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The activity could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Activity->read(null, $id);
		}
		/*$questions = $this->Activity->Question->find('list');
		$answers = $this->Activity->Answer->find('list');
		$users = $this->Activity->User->find('list');
		$this->set(compact('questions', 'answers', 'users'));*/

		$users = $this->Activity->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for activity', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Activity->delete($id)) {
			$this->Session->setFlash(__('Activity deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Activity was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/* manager functions */

        function manage_index() {
                $this->Activity->recursive = 0;
                $this->set('activities', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid activity', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('activity', $this->Activity->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data)) {
                        $this->Activity->create();
                        if ($this->Activity->save($this->data)) {
                                $this->Session->setFlash(__('The activity has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The activity could not be saved. Please, try again.', true));
                        }
                }
                /*$questions = $this->Activity->Question->find('list');
                $answers = $this->Activity->Answer->find('list');
                $users = $this->Activity->User->find('list');
                $this->set(compact('questions', 'answers', 'users'));*/

                $users = $this->Activity->User->find('list');
                $this->set(compact('users'));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid activity', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {
                        if ($this->Activity->save($this->data)) {
                                $this->Session->setFlash(__('The activity has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The activity could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->Activity->read(null, $id);
                }
                /*$questions = $this->Activity->Question->find('list');
                $answers = $this->Activity->Answer->find('list');
                $users = $this->Activity->User->find('list');
                $this->set(compact('questions', 'answers', 'users'));*/

                $users = $this->Activity->User->find('list');
                $this->set(compact('users'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for activity', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->Activity->delete($id)) {
                        $this->Session->setFlash(__('Activity deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('Activity was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }
}
?>
