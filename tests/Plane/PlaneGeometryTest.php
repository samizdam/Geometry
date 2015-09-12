<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Polygons\PolygonInterface;

class PlaneGeometryTest extends GeometryUnitTestCase
{

    public function testCreatePolygonByPoints()
    {
        $facade = new PlaneGeometry();
        $this->assertInstanceOf(PolygonInterface::class, $facade->createPolygonByPoints([]));
    }
    
//     public function 
}