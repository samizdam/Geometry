<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
class LineFactory implements LineFactoryInterface
{

    public function createLine(PointInterface $pointA, PointInterface $pointB)
    {
        return new Line($pointA, $pointB);
    }

    /**
     * 
     * (non-PHPdoc)
     * @see \samizdam\Geometry\Plane\Lines\LineFactoryInterface::createLineSegment()
     * 
     * @param PointInterface $pointA
     * @param PointInterface $pointB
     * @return \samizdam\Geometry\Plane\Lines\LineSegment
     */
    public function createLineSegment(PointInterface $pointA, PointInterface $pointB)
    {
        return new LineSegment($pointA, $pointB);
    }

    public function createRay(PointInterface $pointA, PointInterface $pointB)
    {
        return new Ray($pointA, $pointB);
    }
}