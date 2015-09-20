<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

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
        switch (true) {
            case $this->inspector->isTriangle($polygon):
                $area = $this->getTriangleArea($polygon);
                break;
            default:
                $area = $this->getPolygonArea($polygon);
        }
        
        return $area;
    }

    protected function getTriangleArea(PolygonInterface $triangle)
    {
        $segments = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegmentCollection($triangle->getPoints());
        
        $result = 0;
        foreach ($segments as $segment) {
            list ($x1, $y1, $x2, $y2) = $segment->getListOfCoordinates();
            $result += ($x1 * $y2) - ($y1 * $x2);
        }
        return abs($result) / 2;
    }

    /**
     * This method work well for regular polygons.
     *
     * Method for case with irregular p. must be implement!
     *
     * @param PolygonInterface $polygon
     */
    protected function getPolygonArea(PolygonInterface $polygon)
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
}