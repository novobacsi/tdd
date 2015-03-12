<?php

namespace Tdd;

use \InvalidArgumentException;

class StringToArray
{
	/** The delimiter to use  while exploding the string. */
	const DELIMITER = ',';

	/**
	 * Gets the given string as array using the class delimiter.
	 *
	 * @param string $string   The string we want to explode.
	 *
	 * @throws InvalidArgumentException   When isn't called with string.
	 *
	 * @return array   The resulting array.
	 */
	public function get($string)
	{
		if ($this->isString($string))
		{
			return explode(self::DELIMITER, $string);
		}
		else
		{
			throw new InvalidArgumentException('Not a string!');
		}
	}

	/**
	 * Is the given parameter is a string.
	 *
	 * @param string $string The parameter which we check.
	 *
	 * @return bool   Whether the given parameter is a valid one.
	 */
	protected function isString($string)
	{
		return is_string($string);
	}

} 