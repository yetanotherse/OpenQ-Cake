<?php
class WatchlistsController extends AppController {

	var $name = 'Watchlists';

	function index() {
		$this->Watchlist->recursive = 0;
		$this->set('watchlists', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid watchlist', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('watchlist', $this->Watchlist->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Watchlist->create();
			if ($this->Watchlist->save($this->data)) {
				$this->Session->setFlash(__('The watchlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The watchlist could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->Watchlist->Question->find('list');
		$users = $this->Watchlist->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid watchlist', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Watchlist->save($this->data)) {
				$this->Session->setFlash(__('The watchlist has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The watchlist could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Watchlist->read(null, $id);
		}
		$questions = $this->Watchlist->Question->find('list');
		$users = $this->Watchlist->User->find('list');
		$this->set(compact('questions', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for watchlist', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Watchlist->delete($id)) {
			$this->Session->setFlash(__('Watchlist deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Watchlist was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/* manager fucntions */

        function manage_index() {
                $this->Watchlist->recursive = 0;
                $this->set('watchlists', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid watchlist', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('watchlist', $this->Watchlist->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data)) {
                        $this->Watchlist->create();
                        if ($this->Watchlist->save($this->data)) {
                                $this->Session->setFlash(__('The watchlist has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The watchlist could not be saved. Please, try again.', true));
                        }
                }
                $questions = $this->Watchlist->Question->find('list');
                $users = $this->Watchlist->User->find('list');
                $this->set(compact('questions', 'users'));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid watchlist', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {
                        if ($this->Watchlist->save($this->data)) {
                                $this->Session->setFlash(__('The watchlist has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The watchlist could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->Watchlist->read(null, $id);
                }
                $questions = $this->Watchlist->Question->find('list');
                $users = $this->Watchlist->User->find('list');
                $this->set(compact('questions', 'users'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for watchlist', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->Watchlist->delete($id)) {
                        $this->Session->setFlash(__('Watchlist deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('Watchlist was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }

}
?>
