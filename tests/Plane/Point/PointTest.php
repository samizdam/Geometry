<?php
namespace samizdam\Geometry\Plane\Point;

use samizdam\Geometry\GeometryUnitTestCase;

/**
 *
 * @author samizdam
 *        
 */
class PointTest extends GeometryUnitTestCase
{

    public function testPolarGetters()
    {
        $point = new Point(1, 1);
        $this->assertEquals(pi() / 4, $point->getAngular());
        $this->assertEquals(sqrt(2), $point->getR());
    }
}