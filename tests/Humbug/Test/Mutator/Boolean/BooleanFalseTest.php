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

namespace Humbug\Test\Mutator\Boolean;

use Humbug\Mutator;

class BooleanFalseTest extends \PHPUnit_Framework_TestCase
{

    public function testReturnsTokenEquivalentToTrue()
    {
        $mutation = new Mutator\Boolean\False;
        $this->assertEquals(
            array(
                10 => array(
                    T_STRING, 'true'
                )
            ),
            $mutation->getMutation(array(), 10)
        );
    }

}
