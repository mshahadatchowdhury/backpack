<?php

/**
 * Description of Backpack Test Cases
 *
 * @author Md Shahadat Hossain Chowdhury
 */

require_once("classes/Backpack.php");

class BackpackTest extends PHPUnit_Framework_TestCase{

	public $backpack;

	public function setUp(){
		$this->backpack = new Backpack(1, 10, 5, 0, 0, 1);
		$item = new Item(1, "Apple", "This is an apple product", 1, 2);
		$this->backpack->add($item);
	}

	public function testAdd(){
		$isFound = $this->backpack->find("Apple");
		$this->assertTrue($isFound == true);
	}
}

?>