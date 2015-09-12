<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\GeometryUnitTestCase;

class AngleSizeCalculatorTest extends GeometryUnitTestCase
{
    public function testAngleSizeUnitAccessors()
    {
        $calc = new AngleSizeCalculator();
        
        $this->assertEquals(new AngleSizeUnit(), $calc->getAngleSizeUnit());
        
        $unit = new AngleSizeUnit(AngleSizeUnitsEnum::DEG);
        
        $calc->setAngleSizeUnit($unit);
        $this->assertEquals($unit, $calc->getAngleSizeUnit());
    }
}