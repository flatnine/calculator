<?php 

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {
	public function testAddNumbers()
	{
		$calc = new Calculator;
		$values = array(
			array(2,2,4),
			array(2.5,2.5,5)
		);

		foreach ($values as $numbers) {
			$this->assertEquals($numbers[2] , $calc->add($numbers[0],$numbers[1]));
		}
	}


	/**
	* @expectedException InvalidArgumentException
	*/
	public function testThrowsExceptionIfNonNumericIsPassed()
	{
		$calc = new Calculator;
		$calc->add('a', 'b');
	}
	
}
