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

    public function __construct(FactoriesCollectionInterface $factoryCollection = null, CalculationStrategiesCollectionInterface $calculationStrategiesCollection = null, Constants $constants = null)
    {
        $this->constants = $constants ?  : new Constants();
        $this->calculationStrategiesCollection = $calculationStrategiesCollection ?  : new CalculationStrategiesCollection();
        $this->factoriesCollection = $factoryCollection ?  : new FactoriesCollection();
    }

    public function createPolygonByPoints(array $points)
    {
        return $this->factoriesCollection->getPolygonFactory()->createPolygonByPoints($points);
    }

    public function createLineSegment(PointInterface $A, PointInterface $B)
    {
        return $this->factoriesCollection->getLineFactory()->createLineSegment($A, $B);
    }
}