<?php
namespace samizdam\Geometry\Plane;

/**
 *
 * @author samizdam
 *        
 */
interface FactoriesCollectionInterface
{

    public function getFactory($interface);

    public function setFactory($interface, $factoryClassName);
    
    public function getPolygonFactory();
}