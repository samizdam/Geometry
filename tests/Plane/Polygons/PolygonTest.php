<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\UnitTestCase;
use samizdam\Geometry\Plane\Point;

class PolygonTest extends UnitTestCase
{

    public function testGetArea()
    {
        $polygon = AbstractPolygon::createByPoints([
            new Point(- 1, - 1),
            new Point(- 1, 0),
            new Point(0, 0),
            new Point(0, - 1)
        ]);
        
        $this->assertEquals(1, $polygon->getArea());
        
        $polygon = AbstractPolygon::createByPoints([
            new Point(0, 0),
            new Point(0, 3),
            new Point(2, 3),
            new Point(2, 0)
        ]);
        
        $this->assertEquals(6, $polygon->getArea());
    }

    public function testGetPoints()
    {
        $points = [
            new Point(1, 1),
            new Point(1, 2),
            new Point(3, 0),
            new Point(0, 0)
        ];
        $polygon = AbstractPolygon::createByPoints($points);
        $this->assertEquals($points, $polygon->getPoints());
    }
}