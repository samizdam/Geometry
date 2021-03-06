<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\Point\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
interface LengthCalculatorInterface
{

    public function getDistance(PointInterface $firstPoint, PointInterface $lastPoint);

    public function getSegmentLength(LineSegmentInterface $segment);
}