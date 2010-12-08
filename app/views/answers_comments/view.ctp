<div class="answersComments view">
<h2><?php  __('Answers Comment');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answersComment['AnswersComment']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Answer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($answersComment['Answer']['content'], array('controller' => 'answers', 'action' => 'view', $answersComment['Answer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($answersComment['User']['id'], array('controller' => 'users', 'action' => 'view', $answersComment['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $answersComment['AnswersComment']['content']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answers Comment', true), array('action' => 'edit', $answersComment['AnswersComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Answers Comment', true), array('action' => 'delete', $answersComment['AnswersComment']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answersComment['AnswersComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers Comments', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answers Comment', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers', true), array('controller' => 'answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
