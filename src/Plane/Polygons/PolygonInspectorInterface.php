<?php
namespace samizdam\Geometry\Plane\Polygons;

/**
 *
 * @author samizdam
 *        
 */
interface PolygonInspectorInterface
{

    /**
     *
     * @param PolygonInterface $triangle
     * @return boolean
     */
    public function isTriangle(PolygonInterface $triangle);

    /**
     *
     * @param PolygonInterface $polygon
     * @return boolean
     */
    public function isRegular(PolygonInterface $polygon);
}