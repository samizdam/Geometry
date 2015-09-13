<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Exceptions;

/**
 *
 * @author samizdam
 *        
 */
class ComposeCalculator implements ComposeCalculatorInterface
{

    private $classMap = [
        Angle\AngleSizeCalculatorInterface::class => Angle\AngleSizeCalculator::class,
        Lines\LengthCalculatorInterface::class => Lines\LengthCalculator::class,
        Curves\CircleCalculatorInterface::class => Curves\CircleCalculator::class
    ];

    private $objectPool;

    public function __construct(array $classMap = [])
    {
        $this->objectPool = new \ArrayObject();
    }

    public function getCalculator($interface)
    {
        if (isset($this->classMap[$interface])) {
            if (! $this->objectPool->offsetExists($interface)) {
                $this->setCalculator($interface, $this->classMap[$interface]);
            }
            return $this->objectPool->offsetGet($interface);
        } else {
            throw new Exceptions\OutOfBoundsException("Unknow calculator interface {$interface}");
        }
    }

    public function setCalculator($interface, $calculatorClassName)
    {
        $calculatorInstance = new $calculatorClassName();
        
        if ($calculatorInstance instanceof $interface) {
            $this->objectPool->offsetSet($interface, $calculatorInstance);
        } else {
            throw new Exceptions\InvalidArgumentException("{$calculatorClassName} must implement {$interface}.");
        }
    }
}