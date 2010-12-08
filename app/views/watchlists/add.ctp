<div class="watchlists form">
<?php echo $this->Form->create('Watchlist');?>
	<fieldset>
 		<legend><?php __('Add Watchlist'); ?></legend>
	<?php
		echo $this->Form->input('question_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
