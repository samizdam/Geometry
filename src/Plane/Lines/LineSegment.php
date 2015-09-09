<?php
namespace samizdam\Geometry\Plane\Lines;

class LineSegment extends AbstractLine
{

    public function getPointA()
    {
        return $this->pointA;
    }

    public function getPointB()
    {
        return $this->pointB;
    }

    public function getLength()
    {
        $Ax = $this->pointA->getX();
        $Ay = $this->pointA->getY();
        $Bx = $this->pointB->getX();
        $By = $this->pointB->getY();
        return sqrt(pow(($Bx - $Ax), 2) + pow(($By - $Ay), 2));
    }
}