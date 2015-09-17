<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\CalculatorAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class Circle implements CircleInterface
{
    
    use CalculatorAwareTrait;

    private $centralPoint;

    private $R;

    public function __construct(PointInterface $centralPoint, $R)
    {
        $this->centralPoint = $centralPoint;
        $this->R = (float) $R;
    }

    public function getCentralPoint()
    {
        return $this->centralPoint;
    }

    public function getR()
    {
        return $this->R;
    }

    public function getLength()
    {
        return $this->getComposeCalculator()
            ->getCalculator(CircleCalculatorInterface::class)
            ->getLength($this);
    }

    public function getArea()
    {
        return $this->getComposeCalculator()
            ->getCalculator(CircleCalculatorInterface::class)
            ->getArea($this);
    }
}