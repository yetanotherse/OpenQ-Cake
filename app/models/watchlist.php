<?php
class Watchlist extends AppModel {
	var $name = 'Watchlist';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		/*'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),*/
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
