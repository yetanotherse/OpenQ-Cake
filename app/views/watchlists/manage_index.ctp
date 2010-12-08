<div class="watchlists index">
	<h2><?php __('Watchlists');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($watchlists as $watchlist):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $watchlist['Watchlist']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($watchlist['Question']['title'], array('controller' => 'questions', 'action' => 'view', $watchlist['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($watchlist['User']['id'], array('controller' => 'users', 'action' => 'view', $watchlist['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $watchlist['Watchlist']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $watchlist['Watchlist']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $watchlist['Watchlist']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $watchlist['Watchlist']['id'])); ?>
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
