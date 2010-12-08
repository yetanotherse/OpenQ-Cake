<div class="answers index">
	<h2><?php __('Answers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('content');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('votes');?></th>
			<th><?php echo $this->Paginator->sort('best_count');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($answers as $answer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $answer['Answer']['id']; ?>&nbsp;</td>
		<td><?php echo $answer['Answer']['content']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($answer['Question']['title'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
		</td>
		<td><?php echo $answer['Answer']['date']; ?>&nbsp;</td>
		<td><?php echo $answer['Answer']['votes']; ?>&nbsp;</td>
		<td><?php echo $answer['Answer']['best_count']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $answer['Answer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $answer['Answer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $answer['Answer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $answer['Answer']['id'])); ?>
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
