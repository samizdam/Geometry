<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Polygons\PolygonInterface;
use samizdam\Geometry\Plane\Lines\Line;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;

class PlaneGeometryTest extends GeometryUnitTestCase
{

    public function testCreatePolygonByPoints()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(PolygonInterface::class, $facade->createPolygonByPoints([]));
    }

    public function testCreateLine()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(LineSegmentInterface::class, $facade->createLineSegment(new Point(0, 0), new Point(1, 1)));
    }
}