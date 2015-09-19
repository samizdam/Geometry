<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
class PolygonCalculator implements PolygonCalculatorInterface
{

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
        $result = 0;
        $points = $triangle->getPoints();
        for ($i = 0; $i < count($points) - 1; $i ++) {
            list ($x1, $y1, $x2, $y2) = $this->getVectorCoordinates($points, $i);
            $result += ($x1 * $y2) - ($y1 * $x2);
        }
        return abs($result) / 2;
    }

    protected function getPolygonArea(PolygonInterface $polygon)
    {
        $result = 0;
        $points = $polygon->getPoints();
        for ($i = 0; $i < count($points) - 1; $i ++) {
            list ($x1, $y1, $x2, $y2) = $this->getVectorCoordinates($points, $i);
            $result += ($x1 + $x2) * ($y1 - $y2);
        }
        return abs($result) / 2;
    }

    /**
     *
     * @param PointInterface[] $points
     * @param int $index
     */
    protected function getVectorCoordinates(array $points, $index)
    {
        return [
            $points[$index]->getX(),
            $points[$index]->getY(),
            $points[$index + 1]->getX(),
            $points[$index + 1]->getY()
        ];
    }
}