<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\UnitTestCase;

class TriangleTest extends UnitTestCase
{

    public function testGetArea()
    {
        $polygon = AbstractPolygon::createByPoints([
            new Point(0, 0),
            new Point(0, 4),
            new Point(4, 4)
        ]);
        
        $this->assertEquals(8, $polygon->getArea());
    }
}