<?php
namespace samizdam\Geometry\Plane\Curves;

/**
 *
 * @author samizdam
 *        
 */
interface CircleInterface
{

    public function getArea();

    public function getLength();

    public function getCentralPoint();
    
    public function getR();
}