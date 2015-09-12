<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 *
 * @author samizdam
 *        
 */
interface PolygonFactoryInterface
{

    public function createPolygonByPoints(array $points);
}