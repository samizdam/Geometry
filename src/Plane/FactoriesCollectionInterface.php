<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Plane\Point\PointFactoryInterface;

/**
 *
 * @author samizdam
 *        
 */
interface FactoriesCollectionInterface extends PointFactoryInterface
{

    /**
     *
     * @param string $interface
     * @return mixed
     */
    public function getFactory($interface);

    /**
     *
     * @return Lines\LineFactoryInterface
     */
    public function getLineFactory();

    /**
     *
     * @return Point\PointFactoryInterface
     */
    public function getPointFactory();

    /**
     *
     * @return Polygons\PolygonFactoryInterface
     */
    public function getPolygonFactory();

    /**
     *
     * @return Curves\CurvesFactoryInterface
     */
    public function getCurvesFactory();

    /**
     *
     * @param string $interface
     * @param string $factoryClassName
     */
    public function setFactory($interface, $factoryClassName);
}