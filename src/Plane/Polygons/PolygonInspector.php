<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class PolygonInspector implements PolygonInspectorInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;

    /**
     * 
     * (non-PHPdoc)
     * @see \samizdam\Geometry\Plane\Polygons\PolygonInspectorInterface::isTriangle()
     * 
     * @param PolygonInterface $triangle
     * @return boolean
     */
    public function isTriangle(PolygonInterface $triangle)
    {
        return count($triangle->getPoints()) === 3;
    }

    /**
     * 
     * (non-PHPdoc)
     * @see \samizdam\Geometry\Plane\Polygons\PolygonInspectorInterface::isRegular()
     * 
     * @param PolygonInterface $polygon
     */
    public function isRegular(PolygonInterface $polygon)
    {
        $points = $polygon->getPoints();
        
        $segments = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegmentCollection($points);
        $samleSegment = $segments->current();
        
        foreach ($segments as $segment) {
            if ($segment->getLength() !== $samleSegment->getLength()) {
                return false;
            }
        }
        
        $angles = $this->getFactoriesCollection()
            ->getAngleFactory()
            ->createAngleCollection($points);
        $sampleAngle = $angles->current();
        foreach ($angles as $angle) {
            if ($sampleAngle->getSize() !== $angle->getSize()) {
                return false;
            }
        }
        
        return true;
    }
}