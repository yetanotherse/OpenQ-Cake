<div class="questions form">
<?php echo $this->Form->create('Question');?>
	<fieldset>
 		<legend><?php __('Ask Question'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('content', array('type' => 'textarea', 'label' => ''));
		echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $user_id));
		echo $this->Form->input('date', array('type' => 'hidden'));
	?>
	<h3>Add tags (At least one)</h3>
	<?php 
		//echo $ajax->autoComplete('Tag.name', 'tags/autoComplete');
		echo $this->Form->input('tags', array('type' => 'text', 'label' => 'Specify at most 5 tags separated by a comma (,).'));
	?>
	<div id="newtags">
		
	</div>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
