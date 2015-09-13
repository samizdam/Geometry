<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\Angle;
use samizdam\Geometry\Exceptions as Exceptions;
/**
 *
 * @author samizdam
 *        
 */
class ComposeCalculator implements ComposeCalculatorInterface
{
    use ConstantsAwareTrait;

    private $classMap = [
        Angle\AngleSizeCalculatorInterface::class => Angle\AngleSizeCalculator::class
    ];

    private $objectPool;

    public function __construct(array $classMap = [])
    {
        $this->objectPool = new \ArrayObject();
    }

    public function getCalculator($interface)
    {
        if (!$this->objectPool->offsetExists($interface) && isset($this->classMap[$interface])) {
            $this->setCalculator($interface, $this->classMap[$interface]);
        } else {
            throw new Exceptions\OutOfBoundsException("Unknow calculator interface {$interface}");
        }
        return $this->objectPool->offsetGet($interface);
    }

    public function setCalculator($interface, $calculatorClassName)
    {
        $calculatorInstance = new $calculatorClassName();
        
        if ($calculatorInstance instanceof $interface) {
            $calculatorInstance->setConstants($this->getConstants());
            $this->objectPool->offsetSet($interface, $calculatorInstance);
        } else {
            throw new Exceptions\InvalidArgumentException("{$calculatorClassName} must implement {$interface}.");
        }
    }
}