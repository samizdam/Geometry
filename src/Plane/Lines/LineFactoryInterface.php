<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\PointInterface;

interface LineFactoryInterface
{

    /**
     * Create new Line (infinity) 
     * 
     * @param PointInterface $pointA
     * @param PointInterface $pointB
     * @return LineInterface
     */
    public function createLine(PointInterface $pointA, PointInterface $pointB);

    /**
     * Create new LineSegment
     * 
     * @param PointInterface $pointA
     * @param PointInterface $pointB
     * @return LineSegmentInterface
     */
    public function createLineSegment(PointInterface $pointA, PointInterface $pointB);

    /**
     * Create new Ray
     * @param PointInterface $pointA
     * @param PointInterface $pointB
     * @return RayInterface
     */
    public function createRay(PointInterface $pointA, PointInterface $pointB);
    
    /**
     * 
     * 
     * @param PointInterface[] $points
     * @return LineSegmentCollectionInterface|LineSegmentInterface[]
     */
    public function createLineSegmentCollection(array $points);
}