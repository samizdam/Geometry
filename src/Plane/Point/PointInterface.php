<?php
namespace samizdam\Geometry\Plane\Point;

/**
 *
 * @author samizdam
 *        
 */
interface PointInterface
{

    /**
     * Get angular (azimut at polar system)
     *
     * @return float
     */
    public function getAngular();

    /**
     * Get Polal Radius (distance to zero-point at polar system)
     *
     * @return float
     */
    public function getR();

    /**
     *
     * @return float
     */
    public function getX();

    /**
     *
     * @return float
     */
    public function getY();
}