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
    
    public function getComposeCalculator()
    {
        return $this->compositeCalculator ? : $this->compositeCalculator = new ComposeCalculator();
    }
    
    public function setComposeCalculator(ComposeCalculatorInterface $calculator)
    {
        $this->compositeCalculator = $calculator;
    }
}