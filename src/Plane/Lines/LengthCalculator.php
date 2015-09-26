<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\Point\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
class LengthCalculator implements LengthCalculatorInterface
{

    public function getDistance(PointInterface $firstPoint, PointInterface $lastPoint)
    {
        $Ax = $firstPoint->getX();
        $Ay = $firstPoint->getY();
        $Bx = $lastPoint->getX();
        $By = $lastPoint->getY();
        return sqrt(pow(($Bx - $Ax), 2) + pow(($By - $Ay), 2));
    }

    public function getSegmentLength(LineSegmentInterface $segment)
    {
        return $this->getDistance($segment->getFirstPoint(), $segment->getLastPoint());
    }
}