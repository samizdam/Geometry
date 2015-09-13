<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;

/**
 *
 * @author samizdam
 *        
 */
class Ellipse implements EllipseInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;

    private $innerCircle;

    private $minorAxis;

    private $majorAxis;

    public function __construct(LineSegmentInterface $minorAxis, LineSegmentInterface $majorAxis)
    {
        $this->minorAxis = $minorAxis;
        $this->majorAxis = $majorAxis;
        
        $centralPoint = $minorAxis->getCentralPoint();
        $this->innerCircle = new Circle($centralPoint, $minorAxis->getLength() / 2);
    }

    public function getCentralPoint()
    {
        return $this->innerCircle->getCentralPoint();
    }

    public function getMajorAxis()
    {
        return $this->majorAxis;
        // $this->getFactoriesCollection()->getLineFactory()->
    }

    public function getMinorAxis()
    {
        return $this->minorAxis;
    }

    public function getLength()
    {}

    public function getArea()
    {}

    public function getR()
    {
        return $this->minorAxis->getLength();
    }
}