<div class="questionsTags view">
<h2><?php  __('Questions Tag');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $questionsTag['QuestionsTag']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsTag['Question']['title'], array('controller' => 'questions', 'action' => 'view', $questionsTag['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tag'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($questionsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $questionsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
