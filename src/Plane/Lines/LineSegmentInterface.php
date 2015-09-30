<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\Point\PointInterface;

/**
 * Euclidean Vector variation.
 *
 * @author samizdam
 *        
 */
interface LineSegmentInterface extends LineInterface
{

    /**
     * Get begin Point of the Segment
     *
     * @return PointInterface
     */
    public function getFirstPoint();

    /**
     * Get end Point if the Segment
     *
     * @return PointInterface
     */
    public function getLastPoint();

    /**
     * Calc modulus of Vector
     *
     * @return float
     */
    public function getLength();

    /**
     * Get a middle Point betwen start and end.
     *
     * @return PointInterface
     */
    public function getCentralPoint();

    /**
     * Get list of coorginate: x1, y1, x2, y1
     *
     * @return array
     */
    public function getListOfCoordinates();
}