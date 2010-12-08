<?php
class CategoriesController extends AppController {

	var $name = 'Categories';

	function index() {
		$categories = $this->Category->generatetreelist(null, null, null, '&nbsp;&nbsp;&nbsp;');
		$this->set(compact('categories')); 
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

	function add() {
		if (!empty($this->data) ) {
			$this->Category->save($this->data);
			$this->Session->setFlash('A new category has been added');
			$this->redirect(array('action' => 'index'));
		} else {
			$parents[0] = "[Top]";
			$categories = $this->Category->generatetreelist(null,null,null," - ");
			if($categories) {
			foreach ($categories as $key=>$value)
				$parents[$key] = $value;
			}
			$this->set(compact('parents'));
		}
	}

	function edit($id = null) {
		if (!empty($this->data)) {
			if($this->Category->save($this->data)==false)
			$this->Session->setFlash('Error saving Node.');
			$this->redirect(array('action'=>'index'));
		} else {
			if($id==null) die("No ID received");
			$this->data = $this->Category->read(null, $id);
			$parents[0] = "[ Top ]";
			$categories = $this->Category->generatetreelist(null,null,null," - ");
			if($categories) 
				foreach ($categories as $key=>$value)
					$parents[$key] = $value;
			$this->set(compact('parents'));
		}
	}

	function delete($id = null) {
		if($id==null)
			die("No ID received");
		$this->Category->id=$id;
		if($this->Category->removeFromTree($id,true)==false)
			$this->Session->setFlash('The Category could not be deleted.');
		$this->Session->setFlash('Category has been deleted.');
		$this->redirect(array('action'=>'index'));
	}

        function beforeFilter() {
            parent::beforeFilter();
            $this->Auth->allowedActions = array('*');
        }

	/* manager functions */

        function manage_index() {
                $categories = $this->Category->generatetreelist(null, null, null, '&nbsp;&nbsp;&nbsp;');
                $this->set(compact('categories'));
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid category', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('category', $this->Category->read(null, $id));
        }

        function manage_add() {
                if (!empty($this->data) ) {
                        $this->Category->save($this->data);
                        $this->Session->setFlash('A new category has been added');
                        $this->redirect(array('action' => 'index'));
                } else {
                        $parents[0] = "[Top]";
                        $categories = $this->Category->generatetreelist(null,null,null," - ");
                        if($categories) {
                        foreach ($categories as $key=>$value)
                                $parents[$key] = $value;
                        }
                        $this->set(compact('parents'));
                }
        }

        function manage_edit($id = null) {
                if (!empty($this->data)) {
                        if($this->Category->save($this->data)==false)
                        $this->Session->setFlash('Error saving Node.');
                        $this->redirect(array('action'=>'index'));
                } else {
                        if($id==null) die("No ID received");
                        $this->data = $this->Category->read(null, $id);
                        $parents[0] = "[ Top ]";
                        $categories = $this->Category->generatetreelist(null,null,null," - ");
                        if($categories)
                                foreach ($categories as $key=>$value)
                                        $parents[$key] = $value;
                        $this->set(compact('parents'));
                }
        }

        function manage_delete($id = null) {
                if($id==null)
                        die("No ID received");
                $this->Category->id=$id;
                if($this->Category->removeFromTree($id,true)==false)
                        $this->Session->setFlash('The Category could not be deleted.');
                $this->Session->setFlash('Category has been deleted.');
                $this->redirect(array('action'=>'index'));
        }

}
?>
