<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\Point\PointInterface;
use samizdam\Geometry\Plane\AbstractFactory;

/**
 *
 * @author samizdam
 *        
 */
class AngleFactory extends AbstractFactory implements AngleFactoryInterface
{

    private $defaultUnit;

    public function getDefaultUnit()
    {
        return $this->defaultUnit ?  : $this->defaultUnit = new AngleSizeUnit(AngleSizeUnit::DEFAULT_TYPE);
    }

    public function createAngleByPoints(PointInterface $A, PointInterface $B, PointInterface $C)
    {
        return $this->injectDependecies(new Angle($A, $B, $C));
    }

    public function createAngleCollection(array $points)
    {
        return new AngleCollection($points, $this);
    }
}