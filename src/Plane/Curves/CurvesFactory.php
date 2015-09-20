<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\AbstractFactory;

/**
 *
 * @author samizdam
 *        
 */
class CurvesFactory extends AbstractFactory implements CurvesFactoryInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\Curves\CurvesFactoryInterface::createCircle()
     *
     * @param PointInterface $centralPoint
     * @param number $R
     */
    public function createCircle(PointInterface $centralPoint, $R)
    {
        return $this->injectDependecies(new Circle($centralPoint, $R));
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\Curves\CurvesFactoryInterface::createCircleByDiameterSegment()
     *
     * @param LineSegmentInterface $diameterSegment
     */
    public function createCircleByDiameterSegment(LineSegmentInterface $diameterSegment)
    {
        $centralPoint = $diameterSegment->getCentralPoint();
        $R = $diameterSegment->getLength() / 2;
        return $this->injectDependecies(new Circle($centralPoint, $R));
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\Curves\CurvesFactoryInterface::createCircleByPoints()
     *
     * @param PointInterface $centralPoint
     * @param PointInterface $pointOnCircle
     */
    public function createCircleByPoints(PointInterface $centralPoint, PointInterface $pointOnCircle)
    {
        $R = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($centralPoint, $pointOnCircle)
            ->getLength();
        return $this->injectDependecies(new Circle($centralPoint, $R));
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\Curves\CurvesFactoryInterface::createEllipse()
     *
     * @param PointInterface $F1
     * @param PointInterface $F2
     * @param unknown $semiMajorAxis
     */
    public function createEllipse(PointInterface $F1, PointInterface $F2, $semiMajorAxis)
    {
        return $this->injectDependecies(new Ellipse($F1, $F2, $semiMajorAxis));
    }
}