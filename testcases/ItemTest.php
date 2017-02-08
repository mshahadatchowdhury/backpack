<?php

/**
 * Description of Item Test Cases
 *
 * @author Md Shahadat Hossain Chowdhury
 */

require_once("classes/Item.php");

class ItemTest extends PHPUnit_Framework_TestCase{

	public $test;
	public function setUp(){
		$this->test = new Item(1, "Apple", "This is an apple product", 1, 2);
	}

	public function testName(){
		$name = $this->test->getName();
		$this->assertTrue($name == "Apple");
	}
}

?>