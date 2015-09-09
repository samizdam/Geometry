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
     * @param PointInterface[] $points
     * @return PolygonInterface
     */
    public function createPolygonByPoints(array $points);

    /**
     * Create new LineSegment (Vector)
     *
     * @param PointInterface $A
     * @param PointInterface $B
     */
    public function createLineSegment(PointInterface $A, PointInterface $B);
}