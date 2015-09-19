<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\CalculatorAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
abstract class AbstractPolygon implements PolygonInterface
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

    public function getPoints()
    {
        return $this->points;
    }
}