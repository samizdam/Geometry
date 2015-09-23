<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point;

class PolygonInspectorTest extends GeometryUnitTestCase
{

    public function testIsRegularTrue()
    {
        $polygon = AbstractPolygon::createByPoints([
            new Point(0, 0),
            new Point(0, 1),
            new Point(1, 1),
            new Point(1, 0)
        ]);
        
        $inspector = new PolygonInspector();
        
        $this->assertTrue($inspector->isRegular($polygon));
    }
    
    public function testIsReqularFalse()
    {
        $polygon = AbstractPolygon::createByPoints([
            new Point(0, 0),
            new Point(0, 1),
            new Point(1, 1),
            new Point(2, 0)
        ]);
        
        $inspector = new PolygonInspector();
        
        $this->assertFalse($inspector->isRegular($polygon));
    }
    
    public function testIsReqularFalseOnRhombus()
    {
        $polygon = AbstractPolygon::createByPoints([
            new Point(0, 1),
            new Point(3, 2),
            new Point(6, 1),
            new Point(3, 0)
        ]);
        
        $inspector = new PolygonInspector();
        
        $this->assertFalse($inspector->isRegular($polygon));
    }
    
    public function testIsTriangle()
    {
        $triangle = AbstractPolygon::createByPoints([
            new Point(0, 0),
            new Point(1, 1),
            new Point(1, 0)
        ]);
        
        $inspector = new PolygonInspector();
        
        $this->assertTrue($inspector->isTriangle($triangle));
    }
}