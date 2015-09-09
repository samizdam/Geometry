<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\PointInterface;

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