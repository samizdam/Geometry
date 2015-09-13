<?php
namespace samizdam\Geometry\Plane\Curves;

/**
 *
 * @author samizdam
 *        
 */
interface CircleCalculatorInterface
{

    public function getArea(CircleInterface $circle);

    public function getLength(CircleInterface $circle);
}