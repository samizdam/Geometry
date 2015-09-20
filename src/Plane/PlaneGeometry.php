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
class PlaneGeometry extends AbstractFactory implements PlaneGeometryInterface
{

    /**
     * You can set overrinding Factory, Calculator or Constants.
     *
     *
     * Different instances of this Facade can be configure dynamic. Only Contants will be static for in all Application.
     *
     * @param FactoriesCollectionInterface $factoryCollection
     * @param CompositeCalculatorInterface $calculatorCollection
     * @param Constants $constants
     */
    public function __construct(FactoriesCollectionInterface $factoryCollection = null, CompositeCalculatorInterface $calculatorCollection = null, Constants $constants = null)
    {
        $this->setCompositeCalculator($calculatorCollection ?  : new CompositeCalculator());
        $this->setFactoriesCollection($factoryCollection ?  : new FactoriesCollection());
    }

    public function createPolygonByPoints(array $points)
    {
        return $this->getFactoriesCollection()
            ->getPolygonFactory()
            ->createPolygonByPoints($points);
    }

    public function createLine(PointInterface $A, PointInterface $B)
    {
        return $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLine($A, $B);
    }

    public function createRay(PointInterface $pointA, PointInterface $pointB)
    {
        return $this->getFactoriesCollection()
            ->getLineFactory()
            ->createRay($pointA, $pointB);
    }

    public function createLineSegment(PointInterface $A, PointInterface $B)
    {
        return $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($A, $B);
    }

    public function setFactory($interface, $factoryClassName)
    {
        return $this->getFactoriesCollection()->setFactory($interface, $factoryClassName);
    }

    public function getFactory($interface)
    {
        return $this->getFactoriesCollection()->getFactory($interface);
    }

    public function getCurvesFactory()
    {
        return $this->getFactoriesCollection()->getCurvesFactory();
    }

    public function getLineFactory()
    {
        return $this->getFactoriesCollection()->getLineFactory();
    }

    public function getPolygonFactory()
    {
        return $this->getFactoriesCollection()->getPolygonFactory();
    }
}