<?php
namespace samizdam\Geometry\Plane\Curves;

/**
 *
 * @author samizdam
 *        
 */
interface EllipseInterface extends CircleInterface
{

    /**
     * Get Semi-Minor Axis value
     * 
     * @return float
     */
    public function getSemiMajorAxis();

    /**
     * Get Semi-Major Axis value
     * 
     * @return float
     */
    public function getSemiMinorAxis();

    /**
     * Get Focal Paramert value
     *
     * @return float
     */
    public function getFocalParameter();
    
    /**
     * Get Eccentricity value
     * 
     * @return float 
     */
    public function getEccentricity();
    
    /**
     * Get Focal Length value
     * 
     * @return float
     */
    public function getFocalLength();
}