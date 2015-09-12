<?php
namespace samizdam\Geometry\Plane\Angle;

interface AngleSizeCalculationStrategyInterface
{
    
    public function getAngleSize(AngleInterface $angle);
}