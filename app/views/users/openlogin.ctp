<h2>Login using OpenID</h2>
<?php
echo $form->create('User', array('type' => 'post', 'action' => 'openlogin'));
echo $form->input('OpenidUrl.openid', array('label' => false));
echo $form->end('Login');
?>
