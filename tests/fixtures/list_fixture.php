<?php 
/* SVN FILE: $Id$ */
/* List Fixture generated on: 2008-12-29 11:12:58 : 1230519958*/

class ListFixture extends CakeTestFixture {
	var $name = 'List';
	var $table = 'lists';
	var $fields = array(
			'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
			'name' => array('type'=>'string', 'null' => false, 'default' => NULL, 'length' => 50, 'key' => 'unique'),
			'created' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'updated' => array('type'=>'datetime', 'null' => false, 'default' => NULL),
			'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'username' => array('column' => 'name', 'unique' => 1))
			);
	var $records = array(array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2008-12-29 11:05:58',
			'updated'  => '2008-12-29 11:05:58'
			));
}
?>