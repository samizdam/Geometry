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
     * @return float
     */
    public function getArea(PolygonInterface $polygon);
    
    /**
     * 
     * @param PolygonInterface $polygon
     * @return float
     */
    public function getLength(PolygonInterface $polygon);
}