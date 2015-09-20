<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
interface AngleFactoryInterface
{

    public function getDefaultUnit();

    public function createAngleByPoints(PointInterface $A, PointInterface $B, PointInterface $C);

    /**
     * 
     * @param PointInterface $points
     * @return AngleCollectionInterface
     */
    public function createAngleCollection(array $points);
}