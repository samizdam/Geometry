<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\CalculatorAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\CompositeCalculatorAwareInterface;

class LineSegment extends AbstractLine implements LineSegmentInterface, CompositeCalculatorAwareInterface
{
    
    use CalculatorAwareTrait;
    use FactoriesCollectionAwareTrait;

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
        return $this->getCompositeCalculator()
            ->getCalculator(LengthCalculatorInterface::class)
            ->getSegmentLength($this);
    }

    public function getCentralPoint()
    {
        list($x1, $y1, $x2, $y2) = $this->getListOfCoordinates();
        
        $Cx = ($x1 + $x2) / 2;
        $Cy = ($y1 + $y2) / 2;
        return $this->getFactoriesCollection()->getPoint($Cx, $Cy);
    }

    public function getListOfCoordinates()
    {
        $firstPoint = $this->getFirstPoint();
        $lastPoint = $this->getLastPoint();
        return [
            $firstPoint->getX(),
            $firstPoint->getY(),
            $lastPoint->getX(),
            $lastPoint->getY()
        ];
    }
}