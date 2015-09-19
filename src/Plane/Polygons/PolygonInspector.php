<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 *
 * @author samizdam
 *        
 */
class PolygonInspector implements PolygonInspectorInterface
{

    public function isTriangle(PolygonInterface $triangle)
    {
        return count($triangle->getPoints()) === 3;
    }
}