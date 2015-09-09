<?php
namespace samizdam\Geometry\Plane\Polygons;

class Polygon extends AbstractPolygon
{

    public function getArea()
    {
        $result = 0;
        for ($i = 0; $i < count($this->points) - 1; $i ++) {
            $x1 = $this->points[$i]->getX();
            $y1 = $this->points[$i]->getY();
            $x2 = $this->points[$i + 1]->getX();
            $y2 = $this->points[$i + 1]->getY();
            $result += ($x1 + $x2) * ($y1 - $y2);
        }
        return abs($result) / 2;
    }
}