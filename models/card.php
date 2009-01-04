<?php
class Card extends AppModel {

	var $name = 'Card';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'author',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>
