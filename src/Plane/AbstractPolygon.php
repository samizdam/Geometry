<?php
namespace samizdam\Geometry\Plane;

abstract class AbstractPolygon implements PolygonInterface
{

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