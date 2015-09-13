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

    private $calculationStrategiesCollection;

    private $factoriesCollection;

    /**
     * You can set overrinding Factory, Calculator or Constants.  
     * 
     * Different instances of this Facade can be configure dynamic. Only Contants will be static for in all Application.  
     * 
     * @param FactoriesCollectionInterface $factoryCollection
     * @param ComposeCalculatorInterface $calculationStrategiesCollection
     * @param Constants $constants
     */
    public function __construct(FactoriesCollectionInterface $factoryCollection = null, ComposeCalculatorInterface $calculationStrategiesCollection = null, Constants $constants = null)
    {
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