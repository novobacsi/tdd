<?php

namespace Tdd\Test;

use Tdd\StringToArray;

class StringToArrayTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var StringToArray
	 */
	protected $stringToArray;

	public function setUp()
	{
		$this->stringToArray = new StringToArray();
	}

	public function testEmptyInputReturnProperly()
	{
		$expected      = array('');
		$this->assertEquals($expected, $this->stringToArray->get(''));
	}

	public function testNotStringParameterThrowsException()
	{
		$this->setExpectedException('InvalidArgumentException');

		$this->stringToArray->get(null);
	}
}

