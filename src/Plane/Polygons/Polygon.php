<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 * 
 * @author samizdam
 *
 */
class Polygon extends AbstractPolygon
{

    public function getArea()
    {
        return $this->getComposeCalculator()->getCalculator(PolygonCalculatorInterface::class)->getArea($this);
    }
}