<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
interface ComposeCalculatorInterface
{

    public function getCalculator($interface);

    public function setCalculator($interface, $calculator);
}