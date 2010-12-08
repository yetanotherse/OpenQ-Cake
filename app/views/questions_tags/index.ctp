<div class="questionsTags index">
	<h2><?php __('Questions Tags');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('question_id');?></th>
			<th><?php echo $this->Paginator->sort('tag_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($questionsTags as $questionsTag):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $questionsTag['QuestionsTag']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($questionsTag['Question']['title'], array('controller' => 'questions', 'action' => 'view', $questionsTag['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($questionsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $questionsTag['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $questionsTag['QuestionsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $questionsTag['QuestionsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $questionsTag['QuestionsTag']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $questionsTag['QuestionsTag']['id'])); ?>
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
