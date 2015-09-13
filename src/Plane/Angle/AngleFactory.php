<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
class AngleFactory implements AngleFactoryInterface
{

    private $defaultUnit;

    public function getDefaultUnit()
    {
        return $this->defaultUnit ?  : $this->defaultUnit = new AngleSizeUnit(AngleSizeUnit::DEFAULT_TYPE);
    }
}