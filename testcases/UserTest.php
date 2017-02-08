<?php

/**
 * Description of User Test Cases
 *
 * @author Md Shahadat Hossain Chowdhury
 */

require_once("classes/User.php");

class UserTest extends PHPUnit_Framework_TestCase{

	public $test;
	public function setUp(){
		$this->test = new Item(1, "Shahadat", "mshahadatchowdhury@gmail.com", "646-2413650");
	}

	public function testEmail(){
		$email = $this->test->getEmail();
		$this->assertTrue($email == "mshahadatchowdhury@gmail.com");
	}
}

?>