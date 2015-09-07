<?php
namespace samizdam\Geometry\Plane;

class Circle
{

    private $pointO;

    private $R;

    public function __construct(PointInterface $pointO, $R)
    {
        $this->pointO = $pointO;
        $this->R = (float) $R;
    }

    public function getPointO()
    {
        return $this->pointO;
    }

    public function getR()
    {
        return $this->R;
    }

    public function getLength()
    {
        return 2 * $this->R * pi();
    }

    public function getArea()
    {
        return pi() * pow($this->R, 2);
    }
}