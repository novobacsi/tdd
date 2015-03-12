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

	public function testFirstLineIsLabel()
	{
		$input    = "#useFirstLineAsLabels\nName,Email,Phone\nMark,marc@be.com,998\nNoemi,noemi@ac.co.uk,888";
		$expected = array(
			'labels'=> array(
				'Name',
				'Email',
				'Phone'
			),
			'data' => array(
				array(
					'Mark',
					'marc@be.com',
					'998'
				),
				array(
					'Noemi',
					'noemi@ac.co.uk',
					'888'
				),
			),
		);

		$this->assertEquals($expected, $this->stringToArray->get($input));
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
			'multiLineNumbers' => array(
				'expected' => array(
					array(
						'211',
						'22',
						'35'
					),
					array(
						'10',
						'20',
						'33'
					),
				),
				'input' => "211,22,35\n10,20,33"
			),
			'multiLineAddress' => array(
				'expected' => array(
					array(
						'luxembourg',
						'kennedy',
						'44'
					),
					array(
						'budapest',
						'expo ter',
						'5-7'
					),
					array(
						'gyors',
						'fo utca',
						'9'
					),
				),
				'input' => "luxembourg,kennedy,44\nbudapest,expo ter,5-7\ngyors,fo utca,9"
			)
		);
	}
}

