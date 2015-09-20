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
        return $this->getCompositeCalculator()->getCalculator(PolygonCalculatorInterface::class)->getArea($this);
    }
}