<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Angle\AngleFactoryInterface;
use samizdam\Geometry\Exceptions as Exceptions;

/**
 *
 * @author samizdam
 *        
 */
class FactoriesCollectionTest extends GeometryUnitTestCase
{

    public function testGetUnknowFactory()
    {
        $collection = new FactoriesCollection();
        $this->setExpectedException(Exceptions\OutOfBoundsException::class);
        $collection->getFactory("iUnknowFactory");
    }

    public function testSetInvalidFactoryException()
    {
        $collection = new FactoriesCollection();
        $this->setExpectedException(Exceptions\InvalidArgumentException::class);
        $collection->setFactory(AngleFactoryInterface::class, \stdClass::class);
    }

    public function testCreatePointByPolarCoords()
    {
        $collection = new FactoriesCollection();
        $this->assertInstanceOf(Point\PointInterface::class, $collection->createPointByPolarCoords(1, 1));
    }
}