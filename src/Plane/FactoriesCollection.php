<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\Exceptions as Exceptions;

/**
 *
 * @author samizdam
 *
 */
class FactoriesCollection extends AbstractFactory implements FactoriesCollectionInterface
{

    private $objectPool;

    private $classMap = [
        Angle\AngleFactoryInterface::class => Angle\AngleFactory::class,
        Curves\CurvesFactoryInterface::class => Curves\CurvesFactory::class,
        Lines\LineFactoryInterface::class => Lines\LineFactory::class,
        Point\PointFactoryInterface::class => Point\PointFactory::class,
        Polygons\PolygonFactoryInterface::class => Polygons\PolygonFactory::class
    ];

    public function __construct(array $classMap = [])
    {
        $this->classMap = array_merge($this->classMap, $classMap);
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
        if (isset($this->classMap[$interface])) {
            if (! $this->objectPool->offsetExists($interface)) {
                $this->setFactory($interface, $this->classMap[$interface]);
            }

            return $this->objectPool->offsetGet($interface);
        } else {
            throw new Exceptions\OutOfBoundsException("Unknow factory interface {$interface}");
        }
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
            $this->injectDependecies($factoryInstance);
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

    public function getPointFactory()
    {
        return $this->getFactory(Point\PointFactoryInterface::class);
    }

    /**
     *
     * (non-PHPdoc)
     *
     * @see \samizdam\Geometry\Plane\FactoriesCollectionInterface::getCurvesFactory()
     *
     */
    public function getCurvesFactory()
    {
        return $this->getFactory(Curves\CurvesFactoryInterface::class);
    }

    public function createPoint($x, $y)
    {
        return $this->getPointFactory()->createPoint($x, $y);
    }

    public function createPointByPolarCoords($r, $angular)
    {
        return $this->getPointFactory()->createPointByPolarCoords($r, $angular);
    }
}