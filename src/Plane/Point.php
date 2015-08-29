<?php
namespace samizdam\Geometry\Plane;

class Point implements PointInterface
{

    protected $x;

    protected $y;

    public function __construct($x, $y)
    {
        $this->x = (float) $x;
        $this->y = (float) $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
