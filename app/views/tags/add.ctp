<div class="tags form">
<?php echo $this->Form->create('Tag');?>
	<fieldset>
 		<legend><?php __('Add Tag'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('longname');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
