<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 *
 * @author samizdam
 *        
 */
interface PolygonCalculatorInterface
{

    /**
     * Get area of Polygon
     *
     * @param PolygonInterface $polygon
     */
    public function getArea(PolygonInterface $polygon);
}