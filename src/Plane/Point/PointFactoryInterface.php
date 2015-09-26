<?php
namespace samizdam\Geometry\Plane\Point;

/**
 *
 * @author samizdam
 *        
 */
interface PointFactoryInterface
{

    /**
     * Create Point by Cartesian coordinates.
     *
     * @return Point\PointInterface
     */
    public function createPoint($x, $y);
}