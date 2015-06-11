<?php

namespace Tdd\Test;

use Tdd\PalindromicNumbers;

class PalindromicNumbersTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @dataProvider dataProviderTestInput
	 * @param int  $input    The number.
	 * @param bool $expected The expected result.
	 */
	public function testIsPalindromicNumber($input, $expected)
	{
		$palindromicNumber = new PalindromicNumbers();

		$this->assertEquals($palindromicNumber->isPalindromic($input), $expected);
	}

	public function dataProviderTestInput()
	{
		return array(
			array(
				'input'    => 11,
				'expected' => true,
			),
			array(
				'input'    => 110,
				'expected' => false,
			),
			array(
				'input'    => 123,
				'expected' => false,
			),
			array(
				'input'    => 1,
				'expected' => true,
			),
			array(
				'input'    => 0,
				'expected' => true,
			),
			array(
				'input'    => 1220221,
				'expected' => true,
			),
		);
	}

	/**
	 * @dataProvider dataProviderGetPalindromicNumber
	 * @param $input
	 * @param $expected
	 */
	public function testGetPalindromicNumber($input, $expected)
	{
		$palindromicNumber = new PalindromicNumbers();

		$result = $palindromicNumber->getPalindromicNumber($input);

		$this->assertEquals($expected, $result);
	}

	public function dataProviderGetPalindromicNumber()
	{
		return array(
			array(
				'input'    => 11,
				'expected' => '11 gets palindromic after 0 steps: 11',
			),
			array(
				'input'    => 68,
				'expected' => '68 gets palindromic after 3 steps: 1111',
			),
			array(
				'input'    => 196,
				'expected' => '196 isn\'t gets palindromic in 1000 steps.',
			),
			array(
				'input'    => 123,
				'expected' => '123 gets palindromic after 1 steps: 444',
			),
			array(
				'input'    => 286,
				'expected' => '286 gets palindromic after 23 steps: 8813200023188',
			),
			array(
				'input'    => 196196871,
				'expected' => '196196871 gets palindromic after 45 steps: 4478555400006996000045558744',
			),
		);
	}
}
