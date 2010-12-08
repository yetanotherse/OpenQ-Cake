<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
 		<legend><?php __('Edit Tag'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('longname');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
