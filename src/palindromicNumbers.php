<?php
/**
 * To covert nearly any number into a palindromic number you operate by reversing the digits and adding and then
 * repeating the steps until you get a palindromic number. Some require many steps.
 * e.g. 24 gets palindromic after 1 steps: 66 -> 24 + 42 = 66
 * while 28 gets palindromic after 2 steps: 121 -> 28 + 82 = 110, so 110 + 11 (110 reversed) = 121.
 * Note that, as an example, 196 never gets palindromic (at least according to researchers,
 * at least never in reasonable time). Several numbers never appear to approach being palindromic.
 */

namespace Tdd;

class PalindromicNumbers
{
	/**
	 * Checks whether the given number is a palindromic one.
	 *
	 * @param int $number   The number.
	 *
	 * @return bool
	 */
	public function isPalindromic($number)
	{
		$reversedNumber = strrev($number);

		return $reversedNumber == $number;
	}

} 