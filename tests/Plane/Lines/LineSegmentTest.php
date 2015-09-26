<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point\Point;

class LineSegmentTest extends GeometryUnitTestCase
{

    public function testGetLength()
    {
        $line = new LineSegment(new Point(0, 0), new Point(1, 1));
        $this->assertEquals(sqrt(2), $line->getLength());
    }

    public function testGetPoint()
    {
        $pointA = new Point(0, 0);
        $pointB = new Point(1, 1);
        $line = new LineSegment($pointA, $pointB);
        $this->assertEquals($pointA, $line->getFirstPoint());
        $this->assertEquals($pointB, $line->getLastPoint());
    }
}