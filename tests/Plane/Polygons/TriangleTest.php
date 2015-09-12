<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point;

class TriangleTest extends GeometryUnitTestCase
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