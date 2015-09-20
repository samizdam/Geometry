<?php
namespace samizdam\Geometry\Plane\Polygons;

use samizdam\Geometry\Plane\CalculatorAwareTrait;

class Triangle extends AbstractPolygon
{
    use CalculatorAwareTrait;

    public function getArea()
    {
        return $this->getComposeCalculator()->getCalculator(PolygonCalculatorInterface::class)->getArea($this);
    }
}