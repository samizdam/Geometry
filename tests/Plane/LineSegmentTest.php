<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\UnitTestCase;

class LineSegmentTest extends UnitTestCase
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
        $this->assertEquals($pointA, $line->getPointA());
        $this->assertEquals($pointB, $line->getPointB());
    }
}