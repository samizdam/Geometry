<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Lines\LineSegment;
use samizdam\Geometry\Plane\Point\PointInterface;
use samizdam\Geometry\Plane\Point\Point;
use samizdam\Geometry\Plane\Lines\AbstractLine;

/**
 *
 * @author samizdam
 *        
 */
class CurvesFactoryTest extends GeometryUnitTestCase
{

    public function testCreateCircle()
    {
        $factory = new CurvesFactory();
        $this->assertInstanceOf(Circle::class, $factory->createCircle(new Point(0, 0), 5));
    }

    public function testCreateCircleByDiameterSegment()
    {
        $factory = new CurvesFactory();
        $d = new LineSegment(new Point(0, 0), new Point(1, 1));
        $this->assertInstanceOf(Circle::class, $factory->createCircleByDiameterSegment($d));
    }

    public function testCreateCircleByPoints()
    {
        $factory = new CurvesFactory();
        $this->assertInstanceOf(Circle::class, $factory->createCircleByPoints(new Point(0, 0), new Point(1, 1)));
    }

    public function testCreateEllipse()
    {
        $factory = new CurvesFactory();
        $F1 = $this->getMock(PointInterface::class);
        $F2 = $this->getMock(PointInterface::class);
        $this->assertInstanceOf(Ellipse::class, $factory->createEllipse($F1, $F2, 1));
    }
}