<?php
namespace samizdam\Geometry\Plane\Curves;

/**
 *
 * @author samizdam
 *        
 */
interface EllipseCalculatorInterface
{
    
    /**
     * Get Area of Ellipse
     * 
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getArea(EllipseInterface $ellipse);

    /**
     * Get Length of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getLength(EllipseInterface $ellipse);

    /**
     * Get Semi-Major Axis of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getSemiMinorAxis(EllipseInterface $ellipse);

    /**
     * Get Focal Paramert of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getFocalParameter(EllipseInterface $ellipse);

    /**
     * Get Eccentricity of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getEccentricity(EllipseInterface $ellipse);

    /**
     * Get Focal Length of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getFocalLength(EllipseInterface $ellipse);
}