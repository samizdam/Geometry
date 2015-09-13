<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
interface ComposeCalculatorInterface extends ConstantsAwareInterface
{

    public function getCalculator($interface);

    public function setCalculator($interface, $calculator);
}