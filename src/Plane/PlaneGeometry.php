<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 * Facade for this package.
 * Use it as entry point for library.
 *
 * @author samizdam
 *        
 */
class PlaneGeometry implements PlaneGeometryInterface
{

    private static $instance;

    private function __construct()
    {}

    public static function getInstance()
    {
        return self::$instance ?  : self::$instance = new self();
    }

    public function createPolygonByPoints(array $points)
    {
        return AbstractPolygon::createByPoints($points);
    }

    public function createLineSegment(PointInterface $A, PointInterface $B)
    {
        return new LineSegment($A, $B);
    }
}