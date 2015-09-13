<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Plane\Lines\LineFactoryInterface;
use samizdam\Geometry\Plane\Polygons\PolygonFactoryInterface;

/**
 *
 * @author samizdam
 *        
 */
interface FactoriesCollectionInterface
{

    /**
     *
     * @param string $interface
     * @return mixed
     */
    public function getFactory($interface);

    /**
     *
     * @return LineFactoryInterface
     */
    public function getLineFactory();

    /**
     *
     * @return PolygonFactoryInterface
     */
    public function getPolygonFactory();

    /**
     *
     * @param string $interface
     * @param string $factoryClassName
     */
    public function setFactory($interface, $factoryClassName);
}