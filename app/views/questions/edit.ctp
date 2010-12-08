<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
 		<legend><?php __('Edit Question'); ?></legend>
	<?php
		print_r($this->data);
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('content', array('type' => 'textarea'));
		echo $this->Form->input('Tag');
		echo $this->Form->input('status');
		echo $this->Form->input('category_id', array('selected'=>$this->data['Question']['category_id']));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
