<?php
class UsersController extends AppController {

	var $name = 'Users';
	public $components = array('Openid' => array('use_database' => true, 'accept_google_apps' => true));	

        var $paginate = array(
                        'order' => array(
                                'User.created' => 'desc'
                        ),
                        'limit' => 15
                );

	function index() {
		//$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function register() {
                if ($this->Session->read('Auth.User')) {
                        $this->Session->setFlash('You are already registered on site!');
                        $this->redirect('/questions', null, false);
                }
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {

			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$groups = $this->User->Group->find('list');
		$this->set(compact('groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	function login() {
		if ($this->Session->read('Auth.User')) {
			$this->Session->setFlash('You are already logged in!');
			$this->redirect('/questions', null, false);
		}
	}

	function logout() {
		$this->Session->setFlash('Good-Bye');
		$this->redirect($this->Auth->logout());
	}

    public function openlogin() {
        $realm = 'http://'.$_SERVER['HTTP_HOST'];
        $returnTo = $realm . '/users/login';

        if ($this->RequestHandler->isPost()) 
            $this->makeOpenIDRequest($this->data['OpenidUrl']['openid'], $returnTo, $realm);
        elseif ($this->Openid->isOpenIDResponse())
            $this->handleOpenIDResponse($returnTo);
    }

    private function makeOpenIDRequest($openid, $returnTo, $realm) {
        $required = array('email');
        $optional = array('nickname');
        $this->Openid->authenticate($openid, $returnTo, $realm, array('sreg_required' => $required, 'sreg_optional' => $optional));
    }

    private function handleOpenIDResponse($returnTo) {
        $response = $this->Openid->getResponse($returnTo);

        if ($response->status == Auth_OpenID_SUCCESS) {
            $sregResponse = Auth_OpenID_SRegResponse::fromSuccessResponse($response);
            $sregContents = $sregResponse->contents();

            if ($sregContents) {
                if (array_key_exists('email', $sregContents)) {
                    debug($sregContents['email']);
                }
                if (array_key_exists('nickname', $sregContents)) {
                    debug($sregContents['nickname']);
                }
            }
        }
    }

	function beforeFilter() {
		$this->Auth->fields = array(
			'username' => 'email', 
			'password' => 'password'
		);
		parent::beforeFilter(); 
		//$this->Auth->allowedActions = array('*');
		$this->Auth->allowedActions = array('register', 'logout', 'openlogin');
	}

	/**    
	 * After save callback
	 *
	 * Update the aro for the user.
	 *
	 * @access public
	 * @return void
	 */
	function afterSave($created) {
		if (!$created) {
		    $parent = $this->parentNode();
		    $parent = $this->node($parent);
		    $node = $this->node();
		    $aro = $node[0];
		    $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
		    $this->Aro->save($aro);
		}
	}

	function initDB() {
	    $group =& $this->User->Group;
	    //Allow admins to everything
	    $group->id = 10;     
	    $this->Acl->allow($group, 'controllers');
	 
	    //allow managers to posts and widgets
	    $group->id = 11;
	    $this->Acl->deny($group, 'controllers');
	    $this->Acl->allow($group, 'controllers/Questions');
	    $this->Acl->allow($group, 'controllers/Answers');
	    $this->Acl->allow($group, 'controllers/Activities');
	    $this->Acl->allow($group, 'controllers/Categories');
	    $this->Acl->allow($group, 'controllers/Users');
	    $this->Acl->allow($group, 'controllers/Tags');
	    $this->Acl->allow($group, 'controllers/Watchlists');
	    $this->Acl->allow($group, 'controllers/Questions_Tags');
	    $this->Acl->allow($group, 'controllers/Questions_Votes');
	    $this->Acl->allow($group, 'controllers/Answers_Votes');
	    $this->Acl->allow($group, 'controllers/Questions_Comments');
	    $this->Acl->allow($group, 'controllers/Answers_Comments');

	    //allow users to only add and edit on posts and widgets
	    $group->id = 12;
	    $this->Acl->deny($group, 'controllers');        
	    $this->Acl->allow($group, 'controllers/Questions/ask');
	    $this->Acl->allow($group, 'controllers/Answers/add');
	    $this->Acl->allow($group, 'controllers/Tags/add');
	    $this->Acl->allow($group, 'controllers/Watchlists/add');
	    $this->Acl->allow($group, 'controllers/Watchlists/edit');
	    $this->Acl->allow($group, 'controllers/Questions_Tags/view');
	    $this->Acl->allow($group, 'controllers/Questions_Tags/tagsearch');
	    $this->Acl->allow($group, 'controllers/Users/login');
	    $this->Acl->allow($group, 'controllers/Users/openlogin');
	    $this->Acl->allow($group, 'controllers/Users/register');
	    $this->Acl->allow($group, 'controllers/Questions_Votes/view');
	    $this->Acl->allow($group, 'controllers/Questions_Votes/up');
	    $this->Acl->allow($group, 'controllers/Questions_Votes/down');
	    $this->Acl->allow($group, 'controllers/Answers_Votes/view');
	    $this->Acl->allow($group, 'controllers/Answers_Votes/up');
	    $this->Acl->allow($group, 'controllers/Answers_Votes/down');
	    $this->Acl->allow($group, 'controllers/Questions_Comments/add');
	    $this->Acl->allow($group, 'controllers/Answers_Comments/add');
	}

	/* manager functions */

        function manage_index() {
                $this->User->recursive = 0;
                $this->set('users', $this->paginate());
        }

        function manage_view($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid user', true));
                        $this->redirect(array('action' => 'index'));
                }
                $this->set('user', $this->User->read(null, $id));
        }

        function manage_edit($id = null) {
                if (!$id && empty($this->data)) {
                        $this->Session->setFlash(__('Invalid user', true));
                        $this->redirect(array('action' => 'index'));
                }
                if (!empty($this->data)) {

                        if ($this->User->save($this->data)) {
                                $this->Session->setFlash(__('The user has been saved', true));
                                $this->redirect(array('action' => 'index'));
                        } else {
                                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
                        }
                }
                if (empty($this->data)) {
                        $this->data = $this->User->read(null, $id);
                }
                $groups = $this->User->Group->find('list');
                $this->set(compact('groups'));
        }

        function manage_delete($id = null) {
                if (!$id) {
                        $this->Session->setFlash(__('Invalid id for user', true));
                        $this->redirect(array('action'=>'index'));
                }
                if ($this->User->delete($id)) {
                        $this->Session->setFlash(__('User deleted', true));
                        $this->redirect(array('action'=>'index'));
                }
                $this->Session->setFlash(__('User was not deleted', true));
                $this->redirect(array('action' => 'index'));
        }

        function manage_login() {
		$this->Session->write('managersession_qna',true);
                //$this->redirect('/questions', null, false);
        }

        function manage_logout() {
		$this->Session->delete('managersession_qna');
        }


}
?>
