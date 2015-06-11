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

		$this->assertTrue($palindromicNumber->isPalindromic(11));
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

}

