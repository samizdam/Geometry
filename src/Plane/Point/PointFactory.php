<?php
namespace samizdam\Geometry\Plane\Point;

use samizdam\Geometry\Plane\AbstractFactory;

/**
 *
 * @author samizdam
 *        
 */
class PointFactory extends AbstractFactory implements PointFactoryInterface
{

    public function createPoint($x, $y)
    {
        return new Point($x, $y);
    }

    public function createPointByPolarCoords($r, $angular)
    {
        return Point::createByPolarCoords($r, $angular);
    }
}