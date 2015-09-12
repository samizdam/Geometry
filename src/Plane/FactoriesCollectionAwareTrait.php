<?php
namespace samizdam\Geometry\Plane;

/**
 *
 * @author samizdam
 *        
 */
trait FactoriesCollectionAwareTrait
{

    private $factoriesCollection;

    public function setFactoriesCollection(FactoriesCollectionInterface $factoriesCollection)
    {
        $this->factoriesCollection = $factoriesCollection;
    }

    public function getFactoriesCollection()
    {
        return $this->factoriesCollection ?  : new FactoriesCollection();
    }
}