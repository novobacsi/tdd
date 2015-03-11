<?php
/**
 * Class description.
 *
 * @package
 * @subpackage
 */

namespace Tdd\Test;

use Tdd\Math;


class MathTest extends \PHPUnit_Framework_TestCase
{
	public function testSum()
	{
		$this->assertEquals(2, Math::sum(1, 1));
	}
}

