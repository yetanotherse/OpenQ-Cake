<h2>Login</h2>
<?php
echo $this->Session->flash('auth');
echo $form->create('User', array('url' => array('controller' => 'users', 'action' =>'login')));
echo $form->input('User.email');
echo $form->input('User.password');
echo $form->end('Login');
echo "Or login using " . $html->link('OpenID', array('controller' => 'users', 'action' => 'openlogin'));
?>