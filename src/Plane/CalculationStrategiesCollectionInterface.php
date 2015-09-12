<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
interface CalculationStrategiesCollectionInterface extends ConstantsAwareInterface
{

    public function getStrategy($interface);

    public function setStrategy($interface, $strategy);
}