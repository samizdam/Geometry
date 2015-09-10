<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
class CalculationStrategiesCollection implements CalculationStrategiesCollectionInterface
{
    use ConstantsAwareTrait;

    private $classMap = [
        Angle\AngleSizeCalculationStrategyInterface::class => Angle\AngleSizeCalculationStrategy::class
    ];

    private $objectPool;

    public function __construct(array $classMap = [])
    {
        $this->objectPool = new \ArrayObject();
    }

    public function getStrategy($interface)
    {
        if (!$this->objectPool->offsetExists($interface) && isset($this->classMap[$interface])) {
            $this->setStrategy($interface, $this->classMap[$interface]);
        } else {
            throw new \OutOfBoundsException("Unknow strategy interface {$interface}");
        }
        return $this->objectPool->offsetGet($interface);
    }

    public function setStrategy($interface, $strategyClassName)
    {
        $strategyInstance = new $strategyClassName();
        
        if ($strategyInstance instanceof $interface) {
            $strategyInstance->setConstants($this->getConstants());
            $this->objectPool->offsetSet($interface, $strategyInstance);
        } else {
            throw new \InvalidArgumentException("{$strategyClassName} must implement {$interface}.");
        }
    }
}