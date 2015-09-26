<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\Point\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
interface PolygonInterface
{

    /**
     *
     * @return float
     */
    public function getArea();

    /**
     *
     * @return float
     */
    public function getLength();

    /**
     *
     * @return PointInterface[]
     */
    public function getPoints();
}