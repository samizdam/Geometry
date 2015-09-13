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
class Ellipse extends Circle implements EllipseInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;

    public function __construct(LineSegmentInterface $minorAxis, LineSegmentInterface $majorAxis)
    {}

    public function getMajorAxis()
    {
//         $this->getFactoriesCollection()->getLineFactory()->
    }

    public function getMinorAxis()
    {}
}