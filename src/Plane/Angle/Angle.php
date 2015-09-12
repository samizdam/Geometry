<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\PlaneGeometry;
use samizdam\Geometry\Plane\CalculationStrategiesAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class Angle implements AngleInterface
{
    use FactoriesCollectionAwareTrait;
    use CalculationStrategiesAwareTrait;

    /**
     *
     * @var PointInterface
     */
    private $A, $B, $C;

    /**
     * Second point is Vertex of Angle
     *
     * @param PointInterface $A
     * @param PointInterface $B
     * @param PointInterface $C
     */
    public function __construct(PointInterface $A, PointInterface $B, PointInterface $C)
    {
        $this->A = $A;
        $this->B = $B;
        $this->C = $C;
    }

    public function getFirstVector()
    {
        return $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($this->B, $this->A);
    }

    public function getLastVector()
    {
        return $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($this->B, $this->C);
    }

    public function getSize()
    {
        return $this->getCalculationStrategiesCollection()
            ->getStrategy(AngleSizeCalculationStrategyInterface::class)
            ->getAngleSize($this);
    }

    public function getVertexPoint()
    {
        return $this->B;
    }
}