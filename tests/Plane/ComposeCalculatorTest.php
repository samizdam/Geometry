<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Exceptions as Exceptions;

class ComposeCalculatorTest extends GeometryUnitTestCase
{

    public function testUnknowCalculatorIntrefaceException()
    {
        $calc = new ComposeCalculator();
        $this->setExpectedException(Exceptions\OutOfBoundsException::class);
        $calc->getCalculator("iSomeFantasticCalc");
    }
    
    public function testInvalicImplementationIntrfaceException()
    {
        $calc = new ComposeCalculator();
        $this->setExpectedException(Exceptions\InvalidArgumentException::class);
        $calc->setCalculator("iSomeFantasticCalc", "stdClass");
    }
}