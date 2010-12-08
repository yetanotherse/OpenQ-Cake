<?php
class QuestionsTagsController extends AppController {

	var $name = 'QuestionsTags';

	function index() {
		$this->QuestionsTag->recursive = 0;
		$this->set('questionsTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid questions tag', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('questionsTag', $this->QuestionsTag->read(null, $id));
	}

        function tagsearch($tagid = null) {
                if(!$tagid) {
                        $this->Session->setFlash(__('Invalid question tag', true));
                        $this->redirect(array('controller' => 'questions', 'action' => 'index'));
                } else {
                        $this->set('qtags', $this->paginate(array('tag_id' => $tagid)));
                        //$this->helpers['Paginator'] = array('ajax' => 'Ajax');
                }
        }

	function add() {
		if (!empty($this->data)) {
			$this->QuestionsTag->create();
			if ($this->QuestionsTag->save($this->data)) {
				$this->Session->setFlash(__('The questions tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions tag could not be saved. Please, try again.', true));
			}
		}
		$questions = $this->QuestionsTag->Question->find('list');
		$tags = $this->QuestionsTag->Tag->find('list');
		$this->set(compact('questions', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid questions tag', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->QuestionsTag->save($this->data)) {
				$this->Session->setFlash(__('The questions tag has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The questions tag could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->QuestionsTag->read(null, $id);
		}
		$questions = $this->QuestionsTag->Question->find('list');
		$tags = $this->QuestionsTag->Tag->find('list');
		$this->set(compact('questions', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for questions tag', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->QuestionsTag->delete($id)) {
			$this->Session->setFlash(__('Questions tag deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Questions tag was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/* manager functions */

        function manage_index() {
                $this->QuestionsTag->recursive = 0;
                $this->set('questionsTags', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid questions tag', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('questionsTag', $this->QuestionsTag->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data)) {
                        $this->QuestionsTag->create();
                        if ($this->QuestionsTag->save($this->data)) {
                                $this->Session->setFlash(__('The questions tag has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The questions tag could not be saved. Please, try again.', true));
                        }
                }
                $questions = $this->QuestionsTag->Question->find('list');
                $tags = $this->QuestionsTag->Tag->find('list');
                $this->set(compact('questions', 'tags'));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid questions tag', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {
                        if ($this->QuestionsTag->save($this->data)) {
                                $this->Session->setFlash(__('The questions tag has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The questions tag could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->QuestionsTag->read(null, $id);
                }
                $questions = $this->QuestionsTag->Question->find('list');
                $tags = $this->QuestionsTag->Tag->find('list');
                $this->set(compact('questions', 'tags'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for questions tag', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->QuestionsTag->delete($id)) {
                        $this->Session->setFlash(__('Questions tag deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('Questions tag was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }

}
?>
