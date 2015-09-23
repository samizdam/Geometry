<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;

/**
 *
 * @author samizdam
 *        
 */
class PolygonCalculator implements PolygonCalculatorInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;

    private $inspector;

    public function __construct()
    {
        $this->inspector = new PolygonInspector();
    }

    public function getArea(PolygonInterface $polygon)
    {
        $segments = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegmentCollection($polygon->getPoints());
        
        $result = 0;
        foreach ($segments as $segment) {
            list ($x1, $y1, $x2, $y2) = $segment->getListOfCoordinates();
            $result += ($x1 + $x2) * ($y1 - $y2);
        }
        return abs($result) / 2;
    }

    public function getLength(PolygonInterface $polygon)
    {
        $segments = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegmentCollection($polygon->getPoints());
        
        return array_sum(array_map(function (LineSegmentInterface $segment) {
            return $segment->getLength();
        }, $segments->toArray()));
    }
}