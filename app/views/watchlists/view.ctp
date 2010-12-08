<div class="watchlists view">
<h2><?php  __('Watchlist');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $watchlist['Watchlist']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Question'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($watchlist['Question']['title'], array('controller' => 'questions', 'action' => 'view', $watchlist['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($watchlist['User']['id'], array('controller' => 'users', 'action' => 'view', $watchlist['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
