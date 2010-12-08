<div class="usersTags form">
<?php echo $this->Form->create('UsersTag');?>
	<fieldset>
 		<legend><?php __('Edit Users Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tag_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
