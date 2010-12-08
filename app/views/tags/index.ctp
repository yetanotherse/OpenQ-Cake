<div class="submenu">
        <h2><?php __('Tags');?></h2>
</div>
<div class="tags index">
	<table>
	<tbody>
	<?php
		debug($tags);
		$i = 0;
		$col_count = 0;
		foreach ($tags as $tag) {
			foreach($tagcount as $count)
			{
				if($tag['Tag']['id'] == $count['id']) {
					if( ($col_count+5)%5 == 0 )
						echo '<tr><td class=\'tagcol\'>' . $html->link($tag['Tag']['name'], '/questions_tags/tagsearch/' . $tag['Tag']['id'], array('class'=>'tag-main')) . ' x ' . $count['count'] . '</td></tr>'; 
					else
						echo '<td class=\'tagcol\'>' . $html->link($tag['Tag']['name'], '/questions_tags/tagsearch/' . $tag['Tag']['id'], array('class'=>'tag-main')) . ' x ' . $count['count'] . '</td>'; 
					$i++;
					$col_count++;
				}
			}
		}
	?>
	</tbody>
	</table>
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
