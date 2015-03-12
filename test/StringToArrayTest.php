<?php

namespace Tdd\Test;

use Tdd\StringToArray;

class StringToArrayTest extends \PHPUnit_Framework_TestCase
{
	public function testEmptyInputReturnProperly()
	{
		$stringToArray = new StringToArray();
		$expected      = array('');
		$this->assertEquals($expected, $stringToArray->get(''));
	}
}

