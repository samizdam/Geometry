<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;

/**
 * 
 * @author samizdam
 *
 */
trait ConstantsAwareTrait
{

    private $contrants;

    public function getConstants()
    {
        return $this->contrants ?  : $this->contrants = new Constants();
    }

    public function setConstants(Constants $constants)
    {
        $this->contrants = $constants;
    }
}