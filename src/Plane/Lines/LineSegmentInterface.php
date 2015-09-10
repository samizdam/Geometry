<?php
namespace samizdam\Geometry\Plane\Lines;

interface LineSegmentInterface
{
    public function getFirstPoint();
    
    public function getLastPoint();
    
    public function getLength();
}