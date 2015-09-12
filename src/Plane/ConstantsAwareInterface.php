<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
interface ConstantsAwareInterface
{

    public function getConstants();

    public function setConstants(Constants $constants);
}