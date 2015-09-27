<?php
namespace samizdam\Geometry\Plane\Point;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Angle\AngleSizeUnit;

/**
 *
 * @author samizdam
 *        
 */
class PointTestFactoryTest extends GeometryUnitTestCase
{

    public function testCreatePointByByPolarCoordinates()
    {
        $factory = new PointFactory();
        $this->assertEquals(1, $factory->createPointByPolarCoords(1, pi() / 2)
            ->getY());
        
        $this->assertEquals(1, $factory->createPointByPolarCoords(sqrt(2), pi() / 4)
            ->getY());
    }
}