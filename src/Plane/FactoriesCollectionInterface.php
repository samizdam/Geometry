<?php
namespace samizdam\Geometry\Plane;

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
     * @return Lines\LineFactoryInterface
     */
    public function getLineFactory();

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