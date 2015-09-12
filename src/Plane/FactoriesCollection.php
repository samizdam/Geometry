<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Plane\Polygons\PolygonFactoryInterface;
use samizdam\Geometry\Plane\Polygons\PolygonFactory;
use samizdam\Geometry\Plane\Lines\LineFactoryInterface;
use samizdam\Geometry\Plane\Lines\LineFactory;
use samizdam\Geometry\Plane\Angle\AngleFactoryInterface;
use samizdam\Geometry\Plane\Angle\AngleFactory;

/**
 *
 * @author samizdam
 *        
 */
class FactoriesCollection implements FactoriesCollectionInterface
{

    private $objectPool;

    private $classMap = [
        AngleFactoryInterface::class => AngleFactory::class,
        PolygonFactoryInterface::class => PolygonFactory::class,
        LineFactoryInterface::class => LineFactory::class
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
            throw new \OutOfBoundsException("Unknow factory interface {$interface}");
        }
        return $this->objectPool->offsetGet($interface);
    }

    public function setFactory($interface, $factoryClassName)
    {
        $factoryInstance = new $factoryClassName();
        if ($factoryInstance instanceof $interface) {
            $this->objectPool->offsetSet($interface, $factoryInstance);
        } else {
            throw new \InvalidArgumentException("{$factoryClassName} must implement {$interface}.");
        }
    }

    public function getAngleFactory()
    {
        return $this->getFactory(AngleFactoryInterface::class);
    }

    public function getPolygonFactory()
    {
        return $this->getFactory(PolygonFactoryInterface::class);
    }

    public function getLineFactory()
    {
        return $this->getFactory(LineFactoryInterface::class);
    }
}