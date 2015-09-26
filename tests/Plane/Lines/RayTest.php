<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point\Point;

class RayTest extends GeometryUnitTestCase
{

    public function testGetPointA()
    {
        $pointA = new Point(0, 1);
        $pointB = new Point(1, 1);
        $ray = new Ray($pointA, $pointB);
        $this->assertEquals($pointA, $ray->getFirstPoint());
    }
}