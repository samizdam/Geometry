<?php
namespace samizdam\Geometry\Plane\Angle;

interface AngleSizeCalculatorInterface
{
    
    public function getAngleSize(AngleInterface $angle);
}