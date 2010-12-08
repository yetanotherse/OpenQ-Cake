<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Register'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('password2');
		echo $this->Form->input('about');
		//echo $this->Form->input('level');
		//echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Register', true));?>
</div>
