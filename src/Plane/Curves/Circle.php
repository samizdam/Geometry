<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Constants;
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

    private $pointO;

    private $R;

    public function __construct(PointInterface $pointO, $R)
    {
        $this->pointO = $pointO;
        $this->R = (float) $R;
    }

    public function getPointO()
    {
        return $this->pointO;
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