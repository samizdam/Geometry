<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\Lines\LineSegment;
use samizdam\Geometry\Plane\Polygons\AbstractPolygon;

/**
 * Facade for this package.
 * Use it as entry point for library.
 *
 * @author samizdam
 *        
 */
class PlaneGeometry implements PlaneGeometryInterface
{

    private $constants;

    private $calculationStrategiesCollection;

    private $factoriesCollection;

    public function __construct(FactoriesCollectionInterface $factoryCollection = null, ComposeCalculatorInterface $calculationStrategiesCollection = null, Constants $constants = null)
    {
        $this->constants = $constants ?  : new Constants();
        $this->calculationStrategiesCollection = $calculationStrategiesCollection ?  : new ComposeCalculator();
        $this->factoriesCollection = $factoryCollection ?  : new FactoriesCollection();
    }

    public function createPolygonByPoints(array $points)
    {
        return $this->factoriesCollection->getPolygonFactory()->createPolygonByPoints($points);
    }

    public function createLine(PointInterface $A, PointInterface $B)
    {
        return $this->factoriesCollection->getLineFactory()->createLine($A, $B);
    }

    public function createRay(PointInterface $pointA, PointInterface $pointB)
    {
        return $this->factoriesCollection->getLineFactory()->createRay($pointA, $pointB);
    }

    public function createLineSegment(PointInterface $A, PointInterface $B)
    {
        return $this->factoriesCollection->getLineFactory()->createLineSegment($A, $B);
    }
}