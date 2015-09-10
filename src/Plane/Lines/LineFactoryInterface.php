<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\PointInterface;

interface LineFactoryInterface
{

    public function createLine(PointInterface $pointA, PointInterface $pointB);

    public function createLineSegment(PointInterface $pointA, PointInterface $pointB);

    public function createRay(PointInterface $pointA, PointInterface $pointB);
}