<?php

namespace Tdd;

use \InvalidArgumentException;

class StringToArray
{
	/** The delimiter to use  while exploding the string. */
	const DELIMITER = ',';

	/**
	 * @param $string
	 *
	 * @return string
	 */
	public function get($string)
	{
		if ($this->isString($string))
		{
			if ($this->isMultiLine($string) && preg_match('/#useFirstLineAsLabels/', $string))
			{
				return $this->getLabeledStringAsArray($string);
			}

			if ($this->isMultiLine($string))
			{

				return $this->getMultiLineAsArray($string);
			}

			return $this->explodeStringToArray($string);
		}
		else
		{
			throw new InvalidArgumentException('Not a string!');
		}
	}

	protected function getLabeledStringAsArray($string)
	{
		$multiLine = $this->getMultiLineAsArray($string);
		// Drop marker.
		array_shift($multiLine);

		$result['labels'] = array_shift($multiLine);
		$result['data']   = $multiLine;

		return $result;
	}

	/**
	 * @param $string
	 * @return array
	 */
	protected function explodeStringToArray($string)
	{
		return explode(self::DELIMITER, $string);
	}

	/**
	 * @param $multiLine
	 * @return array
	 */
	protected function getMultiLineAsArray($multiLine)
	{
		$multiLine = preg_split('/[' . PHP_EOL . ']/', $multiLine);
		$result    = array();

		foreach ($multiLine as $line)
		{
			$result[] = $this->explodeStringToArray($line);
		}

		return $result;
	}

	protected function isMultiLine($string)
	{
		return preg_match('/[' . PHP_EOL . ']/', $string);
	}

	protected function isString($string)
	{
		return is_string($string);
	}

} 