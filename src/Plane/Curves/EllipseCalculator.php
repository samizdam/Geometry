<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Constants;
/**
 *
 * @author samizdam
 *        
 */
class EllipseCalculator implements EllipseCalculatorInterface
{

    /**
     * Get Radius (incircle) of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getR(EllipseInterface $ellipse)
    {
        return $ellipse->getSemiMinorAxis();
    }

    /**
     * Get Area of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getArea(EllipseInterface $ellipse)
    {
        return Constants::π * $ellipse->getSemiMajorAxis() * $ellipse->getSemiMinorAxis();
    }

    /**
     * Get Length of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getLength(EllipseInterface $ellipse)
    {
        $a = $ellipse->getSemiMajorAxis();
        $b = $ellipse->getSemiMinorAxis();
        return 4 * ((Constants::π * $a * $b + pow(($a - $b), 2)) / ($a + $b));
    }

    /**
     * Get Semi-Major Axis of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getSemiMinorAxis(EllipseInterface $ellipse)
    {
        return $ellipse->getSemiMajorAxis() * sqrt(1 - pow($ellipse->getEccentricity(), 2));
    }

    /**
     * Get Focal Paramert of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getFocalParameter(EllipseInterface $ellipse)
    {
        return $ellipse->getSemiMajorAxis() * (1 - pow($ellipse->getEccentricity(), 2));
    }

    /**
     * Get Eccentricity of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getEccentricity(EllipseInterface $ellipse)
    {
        return $ellipse->getFocalLength() / $ellipse->getSemiMajorAxis();
    }

    /**
     * Get Focal Length of Ellipse
     *
     * @param EllipseInterface $ellipse
     * @return float
     */
    public function getFocalLength(EllipseInterface $ellipse)
    {
        return $ellipse->getFocusesSegment()->getLength() / 2;
    }
}