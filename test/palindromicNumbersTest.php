<?php

namespace Tdd\Test;

use Tdd\PalindromicNumbers;

class PalindromicNumbersTest extends \PHPUnit_Framework_TestCase
{
	public function testIsPalindromicNumber()
	{
		$palindromicNumber = new PalindromicNumbers();

		$this->assertTrue($palindromicNumber->isPalindromic(11));
	}

}

