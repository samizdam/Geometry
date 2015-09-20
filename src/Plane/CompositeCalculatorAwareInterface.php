<?php
namespace samizdam\Geometry\Plane;

/**
 *
 * @author samizdam
 *        
 */
interface CompositeCalculatorAwareInterface
{

    public function getCompositeCalculator();

    public function setCompositeCalculator(CompositeCalculatorInterface $calculator);
}