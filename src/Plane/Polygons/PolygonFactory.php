<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\AbstractFactory;

/**
 *
 * @author samizdam
 *        
 */
class PolygonFactory extends AbstractFactory implements PolygonFactoryInterface
{

    public function createPolygonByPoints(array $points)
    {
        return $this->injectDependecies(AbstractPolygon::createByPoints($points));
    }
}