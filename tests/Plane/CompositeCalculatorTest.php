<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Exceptions as Exceptions;

class CompositeCalculatorTest extends GeometryUnitTestCase
{

    public function testUnknowCalculatorIntrefaceException()
    {
        $calc = new CompositeCalculator();
        $this->setExpectedException(Exceptions\OutOfBoundsException::class);
        $calc->getCalculator("iSomeFantasticCalc");
    }
    
    public function testInvalicImplementationIntrfaceException()
    {
        $calc = new CompositeCalculator();
        $this->setExpectedException(Exceptions\InvalidArgumentException::class);
        $calc->setCalculator("iSomeFantasticCalc", "stdClass");
    }
}