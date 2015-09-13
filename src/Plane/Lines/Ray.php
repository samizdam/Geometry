<?php
namespace samizdam\Geometry\Plane\Lines;

class Ray extends AbstractLine implements RayInterface
{

    public function getFirstPoint()
    {
        return $this->pointA;
    }
}