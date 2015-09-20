<?php
namespace samizdam\Geometry\Plane;

/**
 * 
 * @author samizdam
 *
 */
trait CalculatorAwareTrait
{

    private $compositeCalculator;
    
    public function getCompositeCalculator()
    {
        return $this->compositeCalculator ? : $this->compositeCalculator = new CompositeCalculator();
    }
    
    public function setCompositeCalculator(CompositeCalculatorInterface $calculator)
    {
        $this->compositeCalculator = $calculator;
    }
}