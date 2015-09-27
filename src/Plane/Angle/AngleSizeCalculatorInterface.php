<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
interface AngleSizeCalculatorInterface
{

    /**
     *
     * @param AngleSizeUnitsEnum $unit
     */
    public function setAngleSizeUnit(AngleSizeUnitsEnum $unit);

    /**
     *
     * @param AngleInterface $angle
     * @param AngleSizeUnitsEnum $angleSizeUnit
     */
    public function getAngleSize(AngleInterface $angle, AngleSizeUnitsEnum $angleSizeUnit = null);
}