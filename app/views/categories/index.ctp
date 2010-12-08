<?php
	echo $html->link("Add Category",array('action'=>'add'));
	echo "<ul>";
	foreach($categories as $key=>$value){
		$edit = $html->link("Edit", array('action'=>'edit', $key));
		$delete = $html->link("Delete", array('action'=>'delete', $key));
		echo "<li>$value&nbsp;[$edit]&nbsp;[$delete]</li>";
	}
	echo "</ul>";
?>

