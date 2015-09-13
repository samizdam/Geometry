<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
class CircleCalculator implements CircleCalculatorInterface
{

    public function getArea(CircleInterface $circle)
    {
        return Constants::π * pow($circle->getR(), 2);
    }

    public function getLength(CircleInterface $circle)
    {
        return 2 * $circle->getR() * Constants::π;
    }
}