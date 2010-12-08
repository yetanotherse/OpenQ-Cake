<?php
$this->Paginator->options(array(
	'update' => '#questions-top',
	'evalScripts' => true,
	'before' => $js->get('#questions-top')->effect('fadeOut', array('buffer' => false)),
	'success' => $js->get('#questions-top')->effect('fadeIn', array('buffer' => false))
));
?>
<div class="submenu">
        <h2><?php __('Unresolved Questions');?></h2>
	<ul class="tabs">
			<li class='<?php echo $menu->highlight('/sort:created/');?>'><?php echo $this->Paginator->sort('created');?></li>
			<li class='<?php echo $menu->highlight('/sort:hits/');?>'><?php echo $this->Paginator->sort('hits');?></li>
			<li class='<?php echo $menu->highlight('/sort:votes/');?>'><?php echo $this->Paginator->sort('votes');?></li>
			<li class='<?php echo $menu->highlight('/sort:answers/');?>'><?php echo $this->Paginator->sort('answers');?></li>
	</ul>
</div>
<div class="questions index" id="questions-top">
<div id="questions">
	<?php
	//debug($questions);
	foreach ($questions as $question) {
	?>
		<div id="question-preview-<?php echo $question['Question']['id'];?>" class="question-preview">
			<div class="qpreview-stats">
				<div class="qpreview-votes">
					<strong><?php echo count($question['QuestionsVote']); ?></strong> <div id="preview-votes">votes</div>
				</div>	
				<div class="qpreview-answers">
					<strong><?php echo count($question['Answer']); ?></strong> <div id="preview-answers">answers</div>
				</div>	
				<div class="qpreview-views">
					<?php echo $question['Question']['hits']; ?> hits
				</div>	
			</div>
			<div class="qpreview">
				<h3><?php echo $this->Html->link(__($question['Question']['title'], true), array('action' => 'view', $question['Question']['id'])); ?></h3>
				<div class="qpreview-contents">
					<?php echo strip_tags(substr($question['Question']['content'], 0, 200)); ?>
				</div>
				<div class="qpreview-tags">
					<?php
					foreach($question['Tag'] as $tag) {
							echo $html->link($tag['name'], '/questions_tags/tagsearch/' . $tag['id'], array('class'=>'tag-main')); 
					}
					?>
				</div>
				<div class="qpreview-user">
					<div class="qpreview-when">
						asked <?php echo $utility->timeago($question['Question']['created']);?> in <?php echo $html->link($question['Category']['name'], '/categories/view/' . $question['Category']['id']);?>
					</div>
					<div class="qpreview-user-details">
						<div class="qpreview-user-image">
							<?php echo $html->image("avatars/default_user.png", array('alt' => 'Stackoverflow user'));?>
						</div>
						<?php echo $html->link($question['User']['firstname'] . ' ' . $question['User']['lastname'], '/users/view/' . $question['User']['id']);?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
