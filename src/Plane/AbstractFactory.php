<?php
namespace samizdam\Geometry\Plane;

/**
 *
 * @author samizdam
 *        
 */
abstract class AbstractFactory implements DependecyInjectorInterface, CompositeCalculatorAwareInterface, FactoriesCollectionAwareInterface
{
    
    use FactoriesCollectionAwareTrait;
    use CalculatorAwareTrait;

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\DependecyInjectorInterface::injectDependecies()
     *
     * @param unknown $object
     * @return Ambigous <\samizdam\Geometry\Plane\FactoriesCollectionAwareInterface, \samizdam\Geometry\Plane\CompositeCalculatorAwareInterface>
     */
    public function injectDependecies($object)
    {
        if ($object instanceof FactoriesCollectionAwareInterface) {
            $object->setFactoriesCollection($this->getFactoriesCollection());
        }
        if ($object instanceof CompositeCalculatorAwareInterface) {
            $object->setCompositeCalculator($this->getCompositeCalculator());
        }
        return $object;
    }
}