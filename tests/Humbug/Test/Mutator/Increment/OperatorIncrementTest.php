<?php
/**
 * Humbug
 *
 * @category   Humbug
 * @package    Humbug
 * @subpackage UnitTests
 * @copyright  Copyright (c) 2015 Pádraic Brady (http://blog.astrumfutura.com)
 * @license    https://github.com/padraic/humbug/blob/master/LICENSE New BSD License
 */

namespace Humbug\Test\Mutator\Increment;

use Humbug\Mutator;

class OperatorIncrementTest extends \PHPUnit_Framework_TestCase
{

    public function testReturnsTokenEquivalentToDecrementOperator()
    {
        $mutation = new Mutator\Increment\Increment;
        $this->assertEquals(
            array(
                10 => array(T_DEC, '--')
            ),
            $mutation->getMutation(array(), 10)
        );
    }

}
