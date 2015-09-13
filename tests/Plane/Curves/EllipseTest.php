<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Lines\LineSegment;
use samizdam\Geometry\Plane\Point;

/**
 *
 * @author samizdam
 *        
 */
class EllipseTest extends GeometryUnitTestCase
{

    public function testGetCentralPoint()
    {
        $minor = new LineSegment(new Point(0, - 5), new Point(0, + 5));
        $major = new LineSegment(new Point(- 10, 0), new Point(+ 10, 0));
        $ellipse = new Ellipse($minor, $major);
        $this->assertEquals(new Point(0, 0), $ellipse->getCentralPoint());
    }
}