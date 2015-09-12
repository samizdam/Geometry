<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 *
 * @author samizdam
 *        
 */
class PolygonFactory implements PolygonFactoryInterface
{

    public function createPolygonByPoints(array $points)
    {
        return AbstractPolygon::createByPoints($points);
    }
}