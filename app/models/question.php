<?php
class Question extends AppModel {
	var $name = 'Question';
        var $actsAs = array(
                'Translate' => array(
			'title', 'content'
		)
        );

	var $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Category' => array(
                        'className' => 'Category',
                        'foreignKey' => 'category_id',
                        'conditions' => '',
                        'fields' => '',
                        'order' => ''
                )
	);

	var $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'question_id',
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
                'QuestionsVote' => array(
                        'className' => 'QuestionsVote',
                        'foreignKey' => 'question_id',
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
                'QuestionsComment' => array(
                        'className' => 'QuestionsComment',
                        'foreignKey' => 'question_id',
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
	);


	var $hasAndBelongsToMany = array(
		'Tag' => array(
			'className' => 'Tag',
			'joinTable' => 'questions_tags',
			'foreignKey' => 'question_id',
			'associationForeignKey' => 'tag_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
?>
