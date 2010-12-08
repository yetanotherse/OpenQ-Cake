<div class="answers form">
<?php echo $this->Form->create('Answer');?>
	<fieldset>
 		<legend><?php __('Edit Answer'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('content');
		echo $this->Form->input('question_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('date');
		echo $this->Form->input('votes');
		echo $this->Form->input('best_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
