<?php
        $this->Paginator->options(array(
                'update' => '#users',
                'evalScripts' => true,
                'before' => $this->Js->get('#users')->effect('slideOut', array('buffer' => false)),
                'success' => $this->Js->get('#users')->effect('slideIn', array('buffer' => false))
        ));
?>
<div class="submenu">
        <h2><?php __('Users');?></h2>
        <ul class="tabs">
                        <li class='<?php echo $menu->highlight('/sort:created/');?>'><?php echo $this->Paginator->sort('created');?></li>
                        <li class='<?php echo $menu->highlight('/sort:firstname/');?>'><?php echo $this->Paginator->sort('firstname');?></li>
	</ul>
</div>
<div class="users index" id="users-top">
<div id="users">
	<?php 
        //debug($users);
	$row = 1; // 5 rows
	$col =1; // 3 columns
        foreach ($users as $user) {
		if($row%5 == 0) $col++;
        ?>
		<div id="user-preview-<?php echo $user['User']['id'];?>" class="user-preview-col-<?php echo $col;?>">
			<div class="user-avatar">
				<?php if(!$user['User']['avatar'])
					echo $html->image("avatars" . DS . "default_user.png", array('alt' => 'Stackoverflow user'));
				else
					echo $html->image("avatars" . DS . $user['User']['avatar'], array('alt' => $user['User']['username']));
				?>
			</div>
			<div class="user-details">
				<?php echo $this->Html->link($user['User']['firstname'] . ' ' . $user['User']['lastname'], array('controller' => 'users', 'action' => 'view', $user['User']['id']));?>
				<?php echo $user['User']['username'];?>
			</div> 
			<div class="user-stats">
				Asked <?php echo count($user['Question']);?> questions <br />
				Answered <?php echo count($user['Answer']);?> questions
			</div>
		</div>
	<?php $row++;
	} ?>
	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
