<div class="answersComments form">
<?php echo $this->Form->create('AnswersComment');?>
	<fieldset>
 		<legend><?php __('Edit Answers Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('answer_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('content');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AnswersComment.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AnswersComment.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Answers Comments', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>