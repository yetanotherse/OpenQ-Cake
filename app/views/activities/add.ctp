<div class="activities form">
<?php echo $this->Form->create('Activity');?>
	<fieldset>
 		<legend><?php __('Add Activity'); ?></legend>
	<?php
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('activity_type');
		echo $this->Form->input('date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
