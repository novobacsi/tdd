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

	/**
	 * @dataProvider dataProviderInput
	 * @param array  $expected
	 * @param string $input
	 */
	public function testEmptyInputReturnProperly($expected, $input)
	{
		$this->assertEquals($expected, $this->stringToArray->get($input));
	}

	public function testNotStringParameterThrowsException()
	{
		$this->setExpectedException('InvalidArgumentException');

		$this->stringToArray->get(null);
	}

	public function dataProviderInput()
	{
		return array(
			'basicCharacters' => array(
				'expected' => array(
					'a',
					'b',
					'c'
				),
				'input' => 'a,b,c'
			),
			'basicNumbers' => array(
				'expected' => array(
					'100',
					'982',
					'444',
					'990',
					'1'
				),
				'input'    => '100,982,444,990,1'
			),
			'emailAddress' => array(
				'expected' => array(
					'Mark',
					'Anthony',
					'marka@lib.de'
				),
				'input' => 'Mark,Anthony,marka@lib.de'
			),
			'onlyDelimiter' => array(
				'expected'  => array(
					'',
					''
				),
				'input' => ','
			),
		);
	}
}

