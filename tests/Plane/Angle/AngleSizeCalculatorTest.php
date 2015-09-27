<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point\Point;

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

    public function testAngleSizeInRad()
    {
        $calc = new AngleSizeCalculator();
        list ($A, $B, $C) = [
            new Point(0, 0),
            new Point(1, 0),
            new Point(1, 1)
        ];
        $angle = new Angle($A, $B, $C);
        $this->assertEquals(pi() / 2, $calc->getAngleSize($angle, new AngleSizeUnit(AngleSizeUnitsEnum::RAD))
            ->getValue());
    }
}