<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Exceptions\DomainException;
use samizdam\Geometry\Plane\Point\Point;

/**
 *
 * @author samizdam
 *        
 */
class AngleCollectionTest extends GeometryUnitTestCase
{

    public function testNeedMorePointsException()
    {
        $this->setExpectedException(DomainException::class);
        new AngleCollection([
            new Point(0, 0)
        ], $this->getMock(AngleFactoryInterface::class));
    }
}