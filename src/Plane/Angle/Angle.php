<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\Point\PointInterface;
use samizdam\Geometry\Plane\CalculatorAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class Angle implements AngleInterface
{
    use FactoriesCollectionAwareTrait;
    use CalculatorAwareTrait;

    /**
     *
     * @var PointInterface
     */
    private $A, $B, $C;

    /**
     *
     * Create Angle based on 2 Vectors from 3 points.
     * Second point is a Vertex of Angle and first Point for Vectors.
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

    public function getSize($unitTypeName = AngleSizeUnitsEnum::DEFAULT_TYPE)
    {
        $angleSizeUnit = new AngleSizeUnit($unitTypeName);
        return $this->getSizeInUnits($angleSizeUnit)->getValue();
    }

    public function getSizeInUnits(AngleSizeUnitsEnum $angleSizeUnit = null)
    {
        return $this->getCompositeCalculator()
            ->getCalculator(AngleSizeCalculatorInterface::class)
            ->getAngleSize($this, $angleSizeUnit);
    }

    public function getVertexPoint()
    {
        return $this->B;
    }
}