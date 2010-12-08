<div class="usersTags index">
	<h2><?php __('Users Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($usersTags as $usersTag):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $usersTag['UsersTag']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($usersTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $usersTag['Tag']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($usersTag['User']['id'], array('controller' => 'users', 'action' => 'view', $usersTag['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $usersTag['UsersTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $usersTag['UsersTag']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $usersTag['UsersTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $usersTag['UsersTag']['id'])); ?>
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
