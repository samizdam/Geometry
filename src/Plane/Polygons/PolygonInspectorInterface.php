<?php
namespace samizdam\Geometry\Plane\Polygons;


/**
 *
 * @author samizdam
 *        
 */
interface PolygonInspectorInterface
{

    public function isTriangle(PolygonInterface $triangle);
}