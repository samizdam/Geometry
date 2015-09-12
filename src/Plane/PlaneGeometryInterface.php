<?php
namespace samizdam\Geometry\Plane;

/**
 * Implement this class for create your own Gateway for package: all classes used it interface for interactions.
 *
 * It is way for extend or re-implement everything.
 *
 * @author samizdam
 *        
 */
interface PlaneGeometryInterface
{

    /**
     * Create new Polygon
     *
     * @param Polygons\PointInterface[] $points
     * @return Polygons\PolygonInterface
     */
    public function createPolygonByPoints(array $points);

    /**
     * Create new LineSegment (Vector)
     *
     * @param PointInterface $A
     * @param PointInterface $B
     * @return Lines\LineSegmentInterface
     */
    public function createLineSegment(PointInterface $A, PointInterface $B);
    
    /**
     * 
     * @param PointInterface $A
     * @param PointInterface $B
     * @return Lines\LineInteface
     */
    public function createLine(PointInterface $A, PointInterface $B);
}