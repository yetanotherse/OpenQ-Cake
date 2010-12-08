<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<fieldset>
 		<legend><?php __('Edit Category'); ?></legend>
	<?php
		echo $this->Form->hidden('id');
		echo $this->Form->input('name');
		echo $this->Form->input('parent_id', array('selected'=>$this->data['Category']['parent_id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
