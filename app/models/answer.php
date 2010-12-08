<?php
class Answer extends AppModel {
	var $displayField = 'content';
	var $name = 'Answer';
        var $actsAs = array(
                'Translate' => array(
			'content'
		)
        );
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
                'AnswersVote' => array(
                        'className' => 'AnswersVote',
                        'foreignKey' => 'answer_id',
                        'dependent' => true,
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'exclusive' => '',
                        'finderQuery' => '',
                        'counterQuery' => ''
                ),
                'AnswersComment' => array(
                        'className' => 'AnswersComment',
                        'foreignKey' => 'answer_id',
                        'dependent' => false,
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'exclusive' => '',
                        'finderQuery' => '',
                        'counterQuery' => ''
                )
	); /*
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'answer_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);*/

}
?>
