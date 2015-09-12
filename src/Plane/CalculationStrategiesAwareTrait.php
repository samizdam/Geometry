<?php
namespace samizdam\Geometry\Plane;

trait CalculationStrategiesAwareTrait
{

    private $strategiesCollection;
    
    public function getCalculationStrategiesCollection()
    {
        return $this->strategiesCollection ? : $this->strategiesCollection = new CalculationStrategiesCollection();
    }
    
    public function setCalculationStrategiesCollection(CalculationStrategiesCollectionInterface $collection)
    {
        $this->strategiesCollection = $collection;
    }
}