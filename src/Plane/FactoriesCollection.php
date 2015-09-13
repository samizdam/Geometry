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

    /**
     *
     * (non-PHPdoc)
     * 
     * @see \samizdam\Geometry\Plane\FactoriesCollectionInterface::getFactory()
     *
     * @param unknown $interface
     * @throws Exceptions\OutOfBoundsException
     * @return mixed
     */
    public function getFactory($interface)
    {
        if (! $this->objectPool->offsetExists($interface) && isset($this->classMap[$interface])) {
            $this->setFactory($interface, $this->classMap[$interface]);
        } else {
            throw new Exceptions\OutOfBoundsException("Unknow factory interface {$interface}");
        }
        return $this->objectPool->offsetGet($interface);
    }

    /**
     *
     * (non-PHPdoc)
     * 
     * @see \samizdam\Geometry\Plane\FactoriesCollectionInterface::setFactory()
     *
     * @param unknown $interface
     * @param unknown $factoryClassName
     * @throws Exceptions\InvalidArgumentException
     */
    public function setFactory($interface, $factoryClassName)
    {
        $factoryInstance = new $factoryClassName();
        if ($factoryInstance instanceof $interface) {
            $this->objectPool->offsetSet($interface, $factoryInstance);
        } else {
            throw new Exceptions\InvalidArgumentException("{$factoryClassName} must implement {$interface}.");
        }
    }

    /**
     *
     * @return Angle\AngleFactoryInterface
     */
    public function getAngleFactory()
    {
        return $this->getFactory(Angle\AngleFactoryInterface::class);
    }

    /**
     *
     * (non-PHPdoc)
     * 
     * @see \samizdam\Geometry\Plane\FactoriesCollectionInterface::getPolygonFactory()
     *
     * @return Polygons\PolygonFactoryInterface
     */
    public function getPolygonFactory()
    {
        return $this->getFactory(Polygons\PolygonFactoryInterface::class);
    }

    /**
     *
     * (non-PHPdoc)
     * 
     * @see \samizdam\Geometry\Plane\FactoriesCollectionInterface::getLineFactory()
     *
     * @return Lines\LineFactoryInterface
     */
    public function getLineFactory()
    {
        return $this->getFactory(Lines\LineFactoryInterface::class);
    }
    
    /**
     * Get point by Cartesian (Decarts) coordinates.
     * 
     * @param float $x
     * @param float $y
     */
    public function getPoint($x, $y)
    {
        return new Point($x, $y);
    }
}