<?php
namespace samizdam\Geometry\Plane\Angle;

interface AngleInterface
{

    public function getFirstVector();
    
    public function getLastVector();
    
    public function getVertexPoint();

    public function getSize();
    
}