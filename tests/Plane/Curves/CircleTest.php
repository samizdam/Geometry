<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point;

class CircleTest extends GeometryUnitTestCase
{

    public function testGetLength()
    {
        $circle1 = new Circle(new Point(0, 0), 1);
        $circle2 = new Circle(new Point(1, 1), 1);
        $this->assertEquals($circle1->getLength(), $circle2->getLength());
        $circle3 = new Circle(new Point(0, 0), 2);
        $this->assertGreaterThan($circle1->getLength(), $circle3->getLength());
    }

    public function testPropertyGetters()
    {
        $pointO = new Point(0, 0);
        $R = 1;
        $circle = new Circle($pointO, $R);
        $this->assertEquals($pointO, $circle->getPointO());
        $this->assertEquals($R, $circle->getR());
    }

    public function testGetArea()
    {
        $circle = new Circle(new Point(0, 0), 2);
        $this->assertGreaterThan(4, $circle->getArea());
    }
}