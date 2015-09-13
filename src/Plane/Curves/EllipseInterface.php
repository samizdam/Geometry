<?php
namespace samizdam\Geometry\Plane\Curves;

/**
 *
 * @author samizdam
 *        
 */
interface EllipseInterface extends CircleInterface
{
    
    public function getMinorAxis();

    public function getMajorAxis();
}