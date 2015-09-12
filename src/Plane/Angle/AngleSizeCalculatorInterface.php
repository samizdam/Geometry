<?php
namespace samizdam\Geometry\Plane\Angle;

interface AngleSizeCalculatorInterface
{
    
    public function setAngleSizeUnit(AngleSizeUnitsEnum $unit);
    
    public function getAngleSize(AngleInterface $angle);
}