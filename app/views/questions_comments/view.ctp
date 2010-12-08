<div class="questionsComments view">
<h2><?php  __('Questions Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsComment['QuestionsComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsComment['Question']['title'], array('controller' => 'questions', 'action' => 'view', $questionsComment['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsComment['User']['id'], array('controller' => 'users', 'action' => 'view', $questionsComment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsComment['QuestionsComment']['content']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Questions Comment', true), array('action' => 'edit', $questionsComment['QuestionsComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Questions Comment', true), array('action' => 'delete', $questionsComment['QuestionsComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsComment['QuestionsComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Questions Comment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions', true), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question', true), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
