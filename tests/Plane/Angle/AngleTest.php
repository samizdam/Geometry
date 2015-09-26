<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point\Point;

class AngleTest extends GeometryUnitTestCase
{

    public function testGetSize()
    {
        $A = new Point(- 1, 0);
        $B = new Point(0, 0);
        $C = new Point(1, 0);
        $angle = new Angle($A, $B, $C);
        $this->assertEquals(180, $angle->getSize());
        
        $A1 = new Point(0, 0);
        $B1 = new Point(1, 0);
        $C1 = new Point(1, 1);
        $angle1 = new Angle($A1, $B1, $C1);
        $this->assertEquals(90, $angle1->getSize());
        
        $A2 = new Point(1, 1);
        $B2 = new Point(0, 0);
        $C2 = new Point(1, 0);
        $angle2 = new Angle($A2, $B2, $C2);
        $this->assertEquals(45, $angle2->getSize());
        
        $A3 = new Point(0, - 1);
        $B3 = new Point(0, 0);
        $C3 = new Point(1, 0);
        $angle3 = new Angle($A3, $B3, $C3);
        $this->assertEquals(270, $angle3->getSize());
        
        $A4 = new Point(- 2, 1);
        $B4 = new Point(- 1, 0);
        $C4 = new Point(0, - 1);
        $angle4 = new Angle($A4, $B4, $C4);
        $this->assertEquals(180, $angle4->getSize());
    }

    public function testGetVertexPoint()
    {
        $A = new Point(- 1, 0);
        $B = new Point(0, 0);
        $C = new Point(1, 0);
        $angle = new Angle($A, $B, $C);
        $this->assertEquals($B, $angle->getVertexPoint());
    }
}