<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
class AngleSizeUnit implements AngleSizeUnitsEnum
{

    private $type;

    public function __construct($type = AngleSizeUnitsEnum::DEFAULT_TYPE)
    {
        $this->type = (string) $type;
    }

    public function getTypeName()
    {
        return $this->getTypeName();
    }
}