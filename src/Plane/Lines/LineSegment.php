<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\CalculatorAwareTrait;

class LineSegment extends AbstractLine implements LineSegmentInterface
{
    
    use CalculatorAwareTrait;

    public function getFirstPoint()
    {
        return $this->pointA;
    }

    public function getLastPoint()
    {
        return $this->pointB;
    }

    public function getLength()
    {
        return $this->getComposeCalculator()->getCalculator(LengthCalculatorInterface::class)->getSegmentLength($this);
    }
}