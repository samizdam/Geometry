<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Exceptions as Exceptions;

/**
 *
 * @author samizdam
 *        
 */
class FactoriesCollection implements FactoriesCollectionInterface
{

    private $objectPool;

    private $classMap = [
        Angle\AngleFactoryInterface::class => Angle\AngleFactory::class,
        Polygons\PolygonFactoryInterface::class => Polygons\PolygonFactory::class,
        Lines\LineFactoryInterface::class => Lines\LineFactory::class
    ];

    public function __construct(array $classMap = [])
    {
        $this->objectPool = new \ArrayObject();
    }

    public function getFactory($interface)
    {
        if (! $this->objectPool->offsetExists($interface) && isset($this->classMap[$interface])) {
            $this->setFactory($interface, $this->classMap[$interface]);
        } else {
            throw new Exceptions\OutOfBoundsException("Unknow factory interface {$interface}");
        }
        return $this->objectPool->offsetGet($interface);
    }

    public function setFactory($interface, $factoryClassName)
    {
        $factoryInstance = new $factoryClassName();
        if ($factoryInstance instanceof $interface) {
            $this->objectPool->offsetSet($interface, $factoryInstance);
        } else {
            throw new Exceptions\InvalidArgumentException("{$factoryClassName} must implement {$interface}.");
        }
    }

    public function getAngleFactory()
    {
        return $this->getFactory(Angle\AngleFactoryInterface::class);
    }

    public function getPolygonFactory()
    {
        return $this->getFactory(Polygons\PolygonFactoryInterface::class);
    }

    public function getLineFactory()
    {
        return $this->getFactory(Lines\LineFactoryInterface::class);
    }
}