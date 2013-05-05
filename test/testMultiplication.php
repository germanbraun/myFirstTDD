<?php
require_once '../scr/Calculator.php';
 
class Test_Calculator extends PHPUnit_Framework_TestCase
{

	public function test_multiplication(){

		$calculator = new Calculator();
		$result = $calculator->times(2,5);
		$this->assertEquals(10, $result);
	}
}
?>
