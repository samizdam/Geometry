<?php
namespace samizdam\Geometry\Plane\Polygons;

class PolygonFactory implements PolygonFactoryInterface
{

    public function createPolygonByPoints(array $points)
    {
        return AbstractPolygon::createByPoints($points);
    }
}