<div class="answers form">
<?php echo $this->Form->create('Answer');?>
	<fieldset>
 		<legend><?php __('Add Answer'); ?></legend>
	<?php
		echo $this->Form->input('content');
		echo $this->Form->input('question_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
