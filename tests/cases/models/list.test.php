<?php 
/* SVN FILE: $Id$ */
/* List Test cases generated on: 2008-12-29 11:12:58 : 1230519958*/
App::import('Model', 'List');

class ListTestCase extends CakeTestCase {
	var $List = null;
	var $fixtures = array('app.list', 'app.task');

	function startTest() {
		$this->List =& ClassRegistry::init('List');
	}

	function testListInstance() {
		$this->assertTrue(is_a($this->List, 'List'));
	}

	function testListFind() {
		$this->List->recursive = -1;
		$results = $this->List->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('List' => array(
			'id'  => 1,
			'name'  => 'Lorem ipsum dolor sit amet',
			'created'  => '2008-12-29 11:05:58',
			'updated'  => '2008-12-29 11:05:58'
			));
		$this->assertEqual($results, $expected);
	}
}
?>