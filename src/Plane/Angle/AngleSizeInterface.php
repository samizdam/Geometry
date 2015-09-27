<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 * Value object for angle size value in some units.
 *
 * @author samizdam
 *        
 */
interface AngleSizeInterface
{

    /**
     *
     * @return AngleSizeUnitsEnum
     */
    public function getType();

    /**
     *
     * @return string
     */
    public function getTypeName();

    /**
     *
     * @return float
     */
    public function getValue();
}