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

	public function testGetPalindromicNumber()
	{
		$palindromicNumber = new PalindromicNumbers();

		$result = $palindromicNumber->getPalindromicNumber(11);

		$this->assertEquals('11 gets palindromic after 0 steps: 11', $result);
	}
}
