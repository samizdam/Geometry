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

    public function getStrategy($interface);

    public function setStrategy($interface, $strategy);
}