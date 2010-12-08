<?php
class TagsController extends AppController {

	var $name = 'Tags';

	function index() {
		$this->Tag->recursive = 0;
		$alltags = $this->Tag->find('all');
		$i = 0;
		$tagcount = array();
		foreach($alltags as $tag) {
			$tcount = $this->Tag->QuestionsTag->find('count', array('conditions' => array('tag_id' => $tag['Tag']['id'])));
			$tagcount[$i]['count'] = $tcount;
			$tagcount[$i]['id'] = $tag['Tag']['id'];
			$i++;	
		}
		$this->set('tags', $this->paginate());
		$this->set(compact('tagcount'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tag', $this->Tag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tag->create();
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(__('The tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->Tag->Question->find('list');
		$this->set(compact('questions'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tag->save($this->data)) {
				$this->Session->setFlash(__('The tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tag->read(null, $id);
		}
		$questions = $this->Tag->Question->find('list');
		$this->set(compact('questions'));
	}
	
	function autoComplete() {
		$this->set('tags', $this->Tag->find('all', array(
			'conditions' => array(
			'Tag.name LIKE ' => '%'.$this->params['url']['q'].'%'
			),
			'limit' => $this->params['url']['limit'],
			'fields' => array('name')
			)
		));
		$this->layout = 'ajax';
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tag->delete($id)) {
			$this->Session->setFlash(__('Tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('*');
	}

	/* manager functions */

        function manage_index() {
                $this->Tag->recursive = 0;
                $this->set('tags', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid tag', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('tag', $this->Tag->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data)) {
                        $this->Tag->create();
                        if ($this->Tag->save($this->data)) {
                                $this->Session->setFlash(__('The tag has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
                        }
                }
                $questions = $this->Tag->Question->find('list');
                $this->set(compact('questions'));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid tag', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {
                        if ($this->Tag->save($this->data)) {
                                $this->Session->setFlash(__('The tag has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The tag could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->Tag->read(null, $id);
                }
                $questions = $this->Tag->Question->find('list');
                $this->set(compact('questions'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for tag', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->Tag->delete($id)) {
                        $this->Session->setFlash(__('Tag deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('Tag was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }

}
?>
