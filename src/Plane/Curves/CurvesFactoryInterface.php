<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\Point\PointInterface;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;

/**
 *
 * @author samizdam
 *        
 */
interface CurvesFactoryInterface
{

    /**
     * 
     * @param PointInterface $centralPoint
     * @param number $R
     */
    public function createCircle(PointInterface $centralPoint, $R);

    /**
     * 
     * @param LineSegmentInterface $diameterSegment
     */
    public function createCircleByDiameterSegment(LineSegmentInterface $diameterSegment);

    /**
     * 
     * @param PointInterface $centralPoint
     * @param PointInterface $pointOnCircle
     */
    public function createCircleByPoints(PointInterface $centralPoint, PointInterface $pointOnCircle);
    
    /**
     * 
     * @param PointInterface $F1
     * @param PointInterface $F2
     * @param number $semiMajorAxis
     */
    public function createEllipse(PointInterface $F1, PointInterface $F2, $semiMajorAxis);
}