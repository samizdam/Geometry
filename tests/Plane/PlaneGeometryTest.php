<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\UnitTestCase;

class PlaneGeometryTest extends UnitTestCase
{

    public function testCreatePolygonByPoints()
    {
        PlaneGeometry::getInstance()->createPolygonByPoints([
            new Point(0, 0),
            new Point(1, 1),
            new Point(10, 0)
        ]);
    }
}