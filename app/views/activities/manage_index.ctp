<div class="activities index">
	<h2><?php __('Activities');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('answer_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('activity_type');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($activities as $activity):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $activity['Activity']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($activity['Question']['title'], array('controller' => 'questions', 'action' => 'view', $activity['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activity['Answer']['id'], array('controller' => 'answers', 'action' => 'view', $activity['Answer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($activity['User']['id'], array('controller' => 'users', 'action' => 'view', $activity['User']['id'])); ?>
		</td>
		<td><?php echo $activity['Activity']['activity_type']; ?>&nbsp;</td>
		<td><?php echo $activity['Activity']['date']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $activity['Activity']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $activity['Activity']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $activity['Activity']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $activity['Activity']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
