<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\CalculatorAwareTrait;
use samizdam\Geometry\Plane\CompositeCalculatorAwareInterface;

/**
 *
 * @author samizdam
 *        
 */
abstract class AbstractPolygon implements PolygonInterface, CompositeCalculatorAwareInterface
{
    
    use CalculatorAwareTrait;

    protected $points;

    protected function __construct(array $points)
    {
        $this->points = $points;
    }

    public static function createByPoints(array $points)
    {
        if (count($points) === 3) {
            $polygon = new Triangle($points);
        } else {
            $polygon = new Polygon($points);
        }
        return $polygon;
    }

    public function getArea()
    {
        return $this->getCompositeCalculator()
            ->getCalculator(PolygonCalculatorInterface::class)
            ->getArea($this);
    }

    public function getLength()
    {
        return $this->getCompositeCalculator()
            ->getCalculator(PolygonCalculatorInterface::class)
            ->getLength($this);
    }

    public function getPoints()
    {
        return $this->points;
    }
}