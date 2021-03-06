<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Exceptions;

/**
 *
 * @author samizdam
 *        
 */
class CompositeCalculator implements CompositeCalculatorInterface
{

    /**
     * Map of default implementations
     *
     *
     * @var array
     */
    private $classMap = [
        Angle\AngleSizeCalculatorInterface::class => Angle\AngleSizeCalculator::class,
        Curves\CircleCalculatorInterface::class => Curves\CircleCalculator::class,
        Curves\EllipseCalculatorInterface::class => Curves\EllipseCalculator::class,
        Lines\LengthCalculatorInterface::class => Lines\LengthCalculator::class,
        Polygons\PolygonCalculatorInterface::class => Polygons\PolygonCalculator::class
    ];

    private $objectPool;

    public function __construct(array $classMap = [])
    {
        $this->classMap = array_merge($this->classMap, $classMap);
        $this->objectPool = new \ArrayObject();
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\CompositeCalculatorInterface::getCalculator()
     *
     * @param string $interface
     * @throws Exceptions\OutOfBoundsException
     * @return Angle\AngleSizeCalculatorInterface|Curves\EllipseCalculatorInterface|Curves\CircleCalculatorInterface|Lines\LengthCalculatorInterface|Polygons\PolygonCalculatorInterface
     *
     */
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