<?php
namespace samizdam\Geometry\Plane;

trait CalculatorAwareTrait
{

    private $strategiesCollection;
    
    public function getComposeCalculator()
    {
        return $this->strategiesCollection ? : $this->strategiesCollection = new ComposeCalculator();
    }
    
    public function setComposeCalculator(ComposeCalculatorInterface $collection)
    {
        $this->strategiesCollection = $collection;
    }
}