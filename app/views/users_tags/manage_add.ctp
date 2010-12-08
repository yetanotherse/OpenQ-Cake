<div class="usersTags form">
<?php echo $this->Form->create('UsersTag');?>
	<fieldset>
 		<legend><?php __('Add Users Tag'); ?></legend>
	<?php
		echo $this->Form->input('tag_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
