<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\CalculatorAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

class LineSegment extends AbstractLine implements LineSegmentInterface
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
        return $this->getComposeCalculator()
            ->getCalculator(LengthCalculatorInterface::class)
            ->getSegmentLength($this);
    }

    public function getCentralPoint()
    {
        $Ax = $this->getFirstPoint()->getX();
        $Ay = $this->getFirstPoint()->getY();
        $Bx = $this->getLastPoint()->getX();
        $By = $this->getLastPoint()->getY();
        
        $Cx = ($Ax + $Bx) / 2;
        $Cy = ($Ay + $By) / 2;
        return $this->getFactoriesCollection()->getPoint($Cx, $Cy);
    }
}