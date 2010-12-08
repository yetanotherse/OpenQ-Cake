<div class="questions view">
<?php //debug($question);?>
<div class="submenu">
	<h2><?php  echo $question['Question']['title'];?></h2>
</div>
<div class="question-main">
	<div class="question-main-voting">
		<div class="question-vote-up">
			<?php echo $this->Js->link($this->Html->image('thumbs_up.png'), array('controller' => 'questions_votes', 'action' => 'up', 'uid:' . $active_user, 'qid:' . $question['Question']['id']), array('escape' => false, 'update' => '#qvotes', 'onmouseover' => 'javascript:;'));?>
		</div>
		<div class="question-votes" id="qvotes">
			<strong><?php echo $qhelper->current_count($question['QuestionsVote']);?></strong>
		</div>
		<div class="question-vote-down">
			<?php echo $this->Js->link($this->Html->image('thumbs_down.png'), array('controller' => 'questions_votes', 'action' => 'down', 'uid:' . $active_user, 'qid:' . $question['Question']['id']), array('escape' => false, 'update' => '#qvotes', 'onmouseover' => 'javascript:;'));?>
		</div>
	</div>
	<div class="question-main-content">
		<div class="question-detail">
			<?php echo $question['Question']['content'];?>
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
				asked <?php echo $utility->timeago($question['Question']['created']);?>
			</div>
			<div class="qpreview-user-details">
				<div class="qpreview-user-image">
					<?php echo $html->image("avatars/default_user.png", array('alt' => 'Stackoverflow user'));?>
				</div>
				<?php echo $html->link($question['User']['firstname'] . ' ' . $question['User']['lastname'], '/users/view/' . $question['User']['id']);?>
			</div>
		</div>
	</div>
		<div id="share" style="clear:left;margin-bottom:5px;">
<span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_twitter_large" displayText="Tweet"></span><span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_facebook_large" displayText="Facebook"></span><span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_ybuzz_large" displayText="Yahoo! Buzz"></span><span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_gbuzz_large" displayText="Google Buzz"></span><span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_email_large" displayText="Email"></span><span st_title="<?php  echo $question['Question']['title'];?>" st_url="" class="st_sharethis_large" displayText="ShareThis"></span>
		</div>
		<div class="question-comments">
			<?php foreach($question['QuestionsComment'] as $qcomment) { ?>
			<div class="q-comment" id="q-comment-<?php echo $qcomment['id'];?>">
				<?php echo $qcomment['content'] . ' - ' . $html->link($qcomment['User']['username'], '/users/view/' . $qcomment['User']['id']);?>
			</div>
			<? } ?>
				<?php echo $html->link('add comment', '#', array('onclick' => 'toggle_visibility(\'qcomment-input\')'));?>
			<div clas="q-comment-new" id="new-qcomment">
				<?php 
					echo $this->Form->create('QuestionsComment', array('action' => 'add'));
					echo $this->Form->input('content', array('type' => 'textarea', 'label' => '', 'class' => 'wmd-ignore', 'rows' => '3', 'cols' => '3', 'id' => 'qcomment-input'));
					echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $active_user));
					echo $this->Form->input('question_id', array('type' => 'hidden', 'value' => $question['Question']['id']));
					echo $this->Form->input('created', array('type' => 'hidden'));
					echo $this->Form->end(__('Post Comment', true));
				?>
			</div>
		</div>
</div>
<div class="answers-main">
	<div class="submenu">
		<h3><?php  echo count($question['Answer']) . ' Answers';?></h3>
	</div>
	<?php foreach($question['Answer'] as $answer) { ?>
		<div id="answer-<?php echo $answer['id'];?>" class="answer-full">
			<div class="answer-main-voting">
				<div class="question-vote-up">
					<?php echo $this->Js->link($this->Html->image('thumbs_up.png'), array('controller' => 'answers_votes', 'action' => 'up', 'uid:' . $active_user, 'aid:' . $answer['id']), array('escape' => false, 'update' => '#avotes-' . $answer['id'], 'onmouseover' => 'javascript:;'));?>
				</div>
				<div class="question-votes" id="avotes-<?php echo $answer['id'];?>">
					<strong><?php echo $qhelper->current_count($answer['AnswersVote']);?></strong>
				</div>
				<div class="question-vote-down">
					<?php echo $this->Js->link($this->Html->image('thumbs_down.png'), array('controller' => 'answers_votes', 'action' => 'down', 'uid:' . $active_user, 'aid:' . $answer['id']), array('escape' => false, 'update' => '#avotes-' . $answer['id'], 'onmouseover' => 'javascript:;'));?>
				</div>
			</div>
			<div class="answer-main-content">
				<div class"answer-detail">
					<?php echo $answer['content'];?>
				</div>
				<div class="answer-user">
					<div class="qpreview-when">
						answered <?php echo $utility->timeago($answer['created']);?>
					</div>
					<div class="qpreview-user-details">
						<div class="qpreview-user-image">
							<?php echo $html->image("avatars/default_user.png", array('alt' => 'Stackoverflow user'));?>
						</div>
						<?php echo $html->link($answer['User']['firstname'] . ' ' . $answer['User']['lastname'], '/users/view/' . $answer['User']['id']);?>
					</div>
				</div>
				<div class="answers-comments">
					<?php foreach($answer['AnswersComment'] as $acomment) { ?>
					<div class="a-comment" id="a-comment-<?php echo $acomment['id'];?>">
						<?php echo $acomment['content'] . ' - ' . $html->link($acomment['User']['username'], '/users/view/' . $acomment['User']['id']);?>
					</div>
					<? } ?>
						<?php echo $html->link('add comment', '#', array('onclick' => 'toggle_visibility(\'acomment-input\')'));?>
					<div clas="a-comment-new" id="new-acomment">
						<?php
							echo $this->Form->create('AnswersComment', array('action' => 'add'));
							echo $this->Form->input('content', array('type' => 'textarea', 'label' => '', 'class' => 'wmd-ignore', 'rows' => '3', 'cols' => '3', 'id' => 'acomment-input-<?php echo $answer[\'id\'];?>'));
							echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $active_user));
							echo $this->Form->input('answer_id', array('type' => 'hidden', 'value' => $answer['id']));
							echo $this->Form->input('question_id', array('type' => 'hidden', 'value' => $question['Question']['id']));
							echo $this->Form->input('created', array('type' => 'hidden'));
							echo $this->Form->end(__('Post Comment', true));
						?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</div>
<div class="new-answer">
	<?php echo $this->Form->create('Answer', array('action' => 'add'));?>
                <h3><?php __('Your Answer'); ?></h3>
        <?php
                echo $this->Form->input('content', array('type' => 'textarea', 'label' => ''));
                echo $this->Form->input('user_id', array('type' => 'hidden', 'value' => $active_user));
                echo $this->Form->input('question_id', array('type' => 'hidden', 'value' => $question['Question']['id']));
                echo $this->Form->input('created', array('type' => 'hidden'));
        ?>
	<?php echo $this->Form->end(__('Post Answer', true));?>
</div>
