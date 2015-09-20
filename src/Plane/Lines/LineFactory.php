<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\AbstractFactory;

/**
 *
 * @author samizdam
 *        
 */
class LineFactory extends AbstractFactory implements LineFactoryInterface
{

    public function createLine(PointInterface $pointA, PointInterface $pointB)
    {
        return $this->injectDependecies(new Line($pointA, $pointB));
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\Lines\LineFactoryInterface::createLineSegment()
     *
     * @param PointInterface $pointA
     * @param PointInterface $pointB
     * @return \samizdam\Geometry\Plane\Lines\LineSegment
     */
    public function createLineSegment(PointInterface $pointA, PointInterface $pointB)
    {
        return $this->injectDependecies(new LineSegment($pointA, $pointB));
    }

    public function createRay(PointInterface $pointA, PointInterface $pointB)
    {
        return $this->injectDependecies(new Ray($pointA, $pointB));
    }

    public function createLineSegmentCollection(array $points)
    {
        return $this->injectDependecies(new LineSegmentCollection($points, $this));
    }
}