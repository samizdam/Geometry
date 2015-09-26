<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Lines\LineSegment;
use samizdam\Geometry\Plane\Point\Point;

/**
 *
 * @author samizdam
 *        
 */
class EllipseTest extends GeometryUnitTestCase
{

    public function testGetCentralPoint()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertEquals(new Point(0, 0), $ellipse->getCentralPoint());
    }

    public function testGetEccentricity()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertLessThan(1, $ellipse->getEccentricity());
    }

    public function testGetSemiMinorAxis()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertLessThan(10, $ellipse->getSemiMinorAxis());
    }

    public function testGetLength()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertGreaterThan(42, $ellipse->getLength());
        $this->assertLessThan(62, $ellipse->getLength());
    }

    public function testGetArea()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertGreaterThan(104, $ellipse->getArea());
        $this->assertLessThan(260, $ellipse->getArea());
    }

    public function testGetFocalLength()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertLessThan(10, $ellipse->getFocalLength());
        $this->assertGreaterThan(0, $ellipse->getFocalLength());
    }

    public function testGetR()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertLessThan(10, $ellipse->getR());
        $this->assertGreaterThan(0, $ellipse->getR());
    }

    public function testGetFocalParameter()
    {
        $ellipse = new Ellipse(new Point(- 7, 0), new Point(7, 0), 10);
        $this->assertLessThan(6.5, $ellipse->getFocalParameter());
        $this->assertGreaterThan(0, $ellipse->getFocalParameter());
        ;
    }
}