<?php

namespace Tdd;

class StringToArray
{
	/** The delimiter to use  while exploding the string. */
	const DELIMITER = ',';

	/**
	 * Gets the given string as array using the class delimiter.
	 *
	 * @param string $string   The string we want to explode.
	 *
	 * @return array   The resulting array.
	 */
	public function get($string)
	{
		return explode(self::DELIMITER, $string);
	}

} 