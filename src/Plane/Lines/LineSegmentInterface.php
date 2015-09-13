<?php
namespace samizdam\Geometry\Plane\Lines;

interface LineSegmentInterface extends LineInterface
{
    public function getFirstPoint();
    
    public function getLastPoint();
    
    public function getLength();
}