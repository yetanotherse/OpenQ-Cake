<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
	var $helpers = array('Rss', 'Qhelper');
	var $paginate = array(
			'order' => array(
				'Question.created' => 'desc'
			),
			'limit' => 10
		);

	function index() {
		$this->Question->recursive = 2;
		$this->set('questions', $this->paginate());
	}

	function unresolved() {
		$this->Question->recursive = 2;
                $this->set('questions', $this->paginate('Question', array('status' => 'open')));
	}

	function tagsearch($tagid = null) {
		if(!$tagid) {
                        $this->Session->setFlash(__('Invalid tag', true));
                        $this->redirect(array('action' => 'index'));
		} else {
			$this->set('unresolved', $this->paginate('Question', array('status' => 'open')));
			$this->helpers['Paginator'] = array('ajax' => 'Ajax');
		}
        }

	function view($id = null) {
		$this->Question->recursive = 2;
		if (!$id) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('question', $this->Question->read(null, $id));
		// update page hits
		$this->Question->id = $id;
		$new_hits = $this->Question->field('hits') + 1;
		$this->Question->saveField('hits', $new_hits);
                $this->set('active_user', $this->Auth->user('id'));

	}

	function ask() {
		if (!empty($this->data)) {
			//debug($this->data);
			$this->Question->create();
			if ($question = $this->Question->save($this->data)) {
				// save tags
				$alltags = $this->Question->Tag->find('list', array('fields' => array('Tag.name', 'Tag.id')));
				//debug($alltags);
				$tags = explode(",", $this->data['Question']['tags']);
				//debug($tags);
				foreach($tags as $t) {
					if(!array_key_exists(trim($t), $alltags)) { // save only unique tags
						$this->Question->Tag->create();
						$this->Question->Tag->set('name', trim($t));
						$tag = $this->Question->Tag->save();
						$tag_id = $this->Question->Tag->id;
						//debug($tag);
					}
					else {
						$this->Question->Tag->recursive = -1;
						$tag = $this->Question->Tag->find('first', array('conditions' => array('Tag.name' => trim($t))));
						$tag_id = $tag['Tag']['id'];
						//debug($tag);
					}
					$this->Question->QuestionsTag->create();
					$this->Question->QuestionsTag->set('question_id', $this->Question->id);
					$this->Question->QuestionsTag->set('tag_id', $tag_id);
					$this->Question->QuestionsTag->save();
				}
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		} 
		$user_id = $this->Auth->user('id');
		$tags = $this->Question->Tag->find('list');
		$categories[0] = "[Top]";
		$cats = $this->Question->Category->generatetreelist(null,null,null," - ");
		if($cats) {
		foreach ($cats as $key=>$value)
			$categories[$key] = $value;
		}
		$this->set(compact('user_id', 'tags', 'categories'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid question', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Question->save($this->data)) {
				$this->Session->setFlash(__('The question has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Question->read(null, $id);
		}
		$users = $this->Question->User->find('list');
		$tags = $this->Question->Tag->find('list');

		$categories[0] = "[ Top ]";
		$cats = $this->Question->Category->generatetreelist(null,null,null," - ");
		if($cats)
			foreach ($cats as $key=>$value)
				$categories[$key] = $value;

		$this->set(compact('users', 'tags', 'categories'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for question', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Question->delete($id)) {
			$this->Session->setFlash(__('Question deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Question was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function autoComplete() {
		//Partial strings will come from the autocomplete field as
		//$this->data['Post']['subject'] 
		$this->set('tagitems', $this->Question->Tag->find('all', array(
					'conditions' => array(
						'Tag.name LIKE' => $this->data['Tag']['name'].'%'
					),
					'fields' => array('name')
		)));
		$this->layout = 'ajax';
	}

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('index', 'view', 'add', 'unresolved');
	}

	/* manager functions */

        function manage_index() {
                $this->Question->recursive = 0;
                $this->set('questions', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid question', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('question', $this->Question->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data)) {
                        $this->Question->create();
                        if ($this->Question->save($this->data)) {
                                $this->Session->setFlash(__('The question has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
                        }
                }
                $users = $this->Question->User->find('list');
                $tags = $this->Question->Tag->find('list');
                $categories[0] = "[Top]";
                $cats = $this->Question->Category->generatetreelist(null,null,null," - ");
                if($cats) {
                foreach ($cats as $key=>$value)
                        $categories[$key] = $value;
                }
                $this->set(compact('users', 'tags', 'categories'));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid question', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {
                        if ($this->Question->save($this->data)) {
                                $this->Session->setFlash(__('The question has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The question could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->Question->read(null, $id);
                }
                $users = $this->Question->User->find('list');
                $tags = $this->Question->Tag->find('list');

                $categories[0] = "[ Top ]";
                $cats = $this->Question->Category->generatetreelist(null,null,null," - ");
                if($cats)
                        foreach ($cats as $key=>$value)
                                $categories[$key] = $value;

                $this->set(compact('users', 'tags', 'categories'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for question', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->Question->delete($id)) {
                        $this->Session->setFlash(__('Question deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('Question was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }

}
?>
