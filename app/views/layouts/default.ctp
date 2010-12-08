<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<?php echo $facebook->html(); ?>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('My Answers'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('cake.generic');
		echo $this->Html->css('menu');
		echo $this->Html->css('index');
		echo $scripts_for_layout;
		echo $this->Html->script('wmd/wmd.js');
		echo $this->Html->script('jquery.min');
		//echo $this->Html->script('http://cdn.jquerytools.org/1.1.2/jquery.tools.min.js'); 
		//echo $this->Html->script('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js');
	?>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script><script type="text/javascript">stLight.options({publisher:'9f0f240e-c2a6-41e2-9b1d-239848bdb811'});</script>
</head>
<body>
	<div id="container" style="">
		<div id="header">
			<div id="topmenu" style="margin-top:0px;float:right;width:100%;display:block;background:#EEEEEE;">
				<?php echo $this->element('topmenu'); ?>
			</div>
			<div id="logo" style="display:inline;float:left;">
				<?php echo $this->Html->link(
				    $this->Html->image("stackoverflow-logo.png", array("alt" => "Stack Overflow")),
				    "/",
				    array('escape'=>false)
				);
				?>
			</div>
			<div id="q-navigation" style="float:right;margin-top:34px;">
				<?php echo $this->element('mainmenu'); ?>
			</div>
		</div>
		<div id="child-container">
			<div id="content">
				<?php echo $this->Session->flash(); ?>
				<?php echo $this->Session->flash('auth'); ?>
				<?php //echo $this->element('tabs' . $menu->curpath()); ?>
				<?php echo $content_for_layout; ?>
			</div>
			<div id="sidebar">
				
			</div>
		</div>
		<div id="footer">
			<p style="text-align: center;">&copy; Copyright 2010 <a href="http://www.sopantech.com">www.sopantech.com</a>. All rights reserved</p>
		</div>
	</div>
	 <?php //echo $this->element('sql_dump'); ?>
      	 <?php echo $facebook->init(); ?>
	<?php echo $this->Js->writeBuffer();?>
</body>
<script type="text/javascript">
<!--
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
//-->
</script>
</html>

