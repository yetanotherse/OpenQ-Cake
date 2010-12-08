<div class="questionsVotes view">
<h2><?php  __('Questions Vote');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsVote['QuestionsVote']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsVote['Question']['title'], array('controller' => 'questions', 'action' => 'view', $questionsVote['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsVote['User']['id'], array('controller' => 'users', 'action' => 'view', $questionsVote['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Action'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsVote['QuestionsVote']['action']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsVote['QuestionsVote']['created']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questions Vote', true), array('action' => 'edit', $questionsVote['QuestionsVote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Questions Vote', true), array('action' => 'delete', $questionsVote['QuestionsVote']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsVote['QuestionsVote']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Votes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Vote', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
