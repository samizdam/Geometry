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

    /**
     * Create Point by polar coordinates.
     *
     * @param float $r
     * @param float $angular
     * @return Point\PointInterface
     */
    public function createPointByPolarCoords($r, $angular);
}