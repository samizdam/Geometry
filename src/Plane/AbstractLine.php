<?php
namespace samizdam\Geometry\Plane;

abstract class AbstractLine
{

    protected $pointA;

    protected $pointB;

    public function __construct(PointInterface $pointA, PointInterface $pointB)
    {
        $this->pointA = $pointA;
        $this->pointB = $pointB;
    }
}