<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\UnitTestCase;
use samizdam\Geometry\Plane\Point;

class RayTest extends UnitTestCase
{

    public function testGetPointA()
    {
        $pointA = new Point(0, 1);
        $pointB = new Point(1, 1);
        $ray = new Ray($pointA, $pointB);
        $this->assertEquals($pointA, $ray->getPointA());
    }
}