<?php
class Task extends AppModel {

	var $name = 'Task';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Tlist' => array('className' => 'Tlist',
								'foreignKey' => 'list_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			),
			'Location' => array('className' => 'Location',
								'foreignKey' => 'location_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'Tag' => array('className' => 'Tag',
						'joinTable' => 'tags_tasks',
						'foreignKey' => 'task_id',
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
