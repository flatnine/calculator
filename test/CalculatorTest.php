<?php 

use App\Libraries\Calculator;

class CalculatorTest extends PHPUnit_Framework_TestCase {

	protected $calc;

	public function setUp() 
	{
		$this->calc = new Calculator;
	}

	public function inputNumbers()
	{
		return array(
                        array(2,2,4),
                        array(2.5,2.5,5),
                        array(4,-8,-4)
                );
	}


	/**
	* @dataProvider inputNumbers
	*/
	public function testAddNumbers($x, $y, $sum)
	{
		$this->assertEquals($sum , $this->calc->add($x,$y));
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testThrowsExceptionIfNonNumericIsPassed()
	{
		$this->calc->add('a', 'b');
	}
	
}
