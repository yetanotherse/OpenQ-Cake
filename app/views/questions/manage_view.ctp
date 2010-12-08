<div class="questions view">
<h2><?php  __('Question');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Content'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['content']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($question['User']['username'], array('controller' => 'users', 'action' => 'view', $question['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $question['Question']['status']; ?>
			&nbsp;
		</dd>
                <dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
                <dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($question['Category']['name'], array('controller' => 'categories', 'action' => 'view', $question['Category']['id'])); ?>
                        &nbsp;
                </dd>
	</dl>
</div>
<div class="related">
	<h3><?php __('Related Activities');?></h3>
	<?php if (!empty($question['Activity'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('Answer Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Activity Type'); ?></th>
		<th><?php __('Date'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Activity'] as $activity):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $activity['id'];?></td>
			<td><?php echo $activity['question_id'];?></td>
			<td><?php echo $activity['answer_id'];?></td>
			<td><?php echo $activity['user_id'];?></td>
			<td><?php echo $activity['activity_type'];?></td>
			<td><?php echo $activity['date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'activities', 'action' => 'view', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'activities', 'action' => 'edit', $activity['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'activities', 'action' => 'delete', $activity['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activity['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Activity', true), array('controller' => 'activities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Answers');?></h3>
	<?php if (!empty($question['Answer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Content'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Date'); ?></th>
		<th><?php __('Votes'); ?></th>
		<th><?php __('Best Count'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Answer'] as $answer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $answer['id'];?></td>
			<td><?php echo $answer['content'];?></td>
			<td><?php echo $answer['question_id'];?></td>
			<td><?php echo $answer['user_id'];?></td>
			<td><?php echo $answer['date'];?></td>
			<td><?php echo $answer['votes'];?></td>
			<td><?php echo $answer['best_count'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'answers', 'action' => 'view', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'answers', 'action' => 'edit', $answer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'answers', 'action' => 'delete', $answer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Answer', true), array('controller' => 'answers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Watchlists');?></h3>
	<?php if (!empty($question['Watchlist'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Question Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Watchlist'] as $watchlist):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $watchlist['id'];?></td>
			<td><?php echo $watchlist['question_id'];?></td>
			<td><?php echo $watchlist['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'watchlists', 'action' => 'view', $watchlist['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'watchlists', 'action' => 'edit', $watchlist['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'watchlists', 'action' => 'delete', $watchlist['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $watchlist['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Watchlist', true), array('controller' => 'watchlists', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tags');?></h3>
	<?php if (!empty($question['Tag'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Longname'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($question['Tag'] as $tag):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tag['id'];?></td>
			<td><?php echo $tag['name'];?></td>
			<td><?php echo $tag['longname'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tags', 'action' => 'view', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tags', 'action' => 'edit', $tag['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tags', 'action' => 'delete', $tag['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tag['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tag', true), array('controller' => 'tags', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
