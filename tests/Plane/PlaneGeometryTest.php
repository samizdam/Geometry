<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Polygons as Polygons;
use samizdam\Geometry\Plane\Lines as Lines;

class PlaneGeometryTest extends GeometryUnitTestCase
{

    public function testCreateLine()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(Lines\LineInterface::class, $facade->createLine(new Point(0, 0), new Point(1, 1)));
    }

    public function testCreateLineSegment()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(Lines\LineSegmentInterface::class, $facade->createLineSegment(new Point(0, 0), new Point(1, 1)));
    }

    public function testCreatePolygonByPoints()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(Polygons\PolygonInterface::class, $facade->createPolygonByPoints([]));
    }

    public function testCreateRay()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(Lines\RayInterface::class, $facade->createRay(new Point(0, 0), new Point(1, 1)));
    }
}