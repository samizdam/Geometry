<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;
use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\CalculatorAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class Ellipse implements EllipseInterface, FactoriesCollectionAwareInterface
{
    use FactoriesCollectionAwareTrait;
    use CalculatorAwareTrait;

    /**
     *
     * @var PointInterface
     */
    private $centralPoint;

    /**
     *
     * @var float
     */
    private $focalLength;

    /**
     *
     * @var float
     */
    private $focalParameter;

    /**
     *
     * @var float
     */
    private $semiMinorAxis;

    /**
     *
     * @var float
     */
    private $semiMajorAxis;

    /**
     *
     * @var float
     */
    private $eccentricity;

    /**
     *
     * @var PointInterface
     */
    private $F1, $F2;

    /**
     *
     * @var float
     */
    private $area;

    /**
     *
     * @var float
     */
    private $length;

    /**
     *
     * @var unknown
     */
    private $focusesSegment;

    /**
     * Create new Ellipse by Focuses and Asixes.
     *
     * @param PointInterface $F1
     * @param PointInterface $F2
     * @param float $semiMajorAxis
     */
    public function __construct(PointInterface $F1, PointInterface $F2, $semiMajorAxis)
    {
        $this->F1 = $F1;
        $this->F2 = $F2;
        $this->semiMajorAxis = $semiMajorAxis;
    }

    public function getCentralPoint()
    {
        return $this->centralPoint ?  : $this->centralPoint = $this->getFocusesSegment()->getCentralPoint();
    }

    public function getSemiMajorAxis()
    {
        return $this->semiMajorAxis;
    }

    public function getSemiMinorAxis()
    {
        return $this->semiMinorAxis ?  : $this->semiMinorAxis = $this->calc(__FUNCTION__);
    }

    public function getLength()
    {
        return $this->length ?  : $this->length = $this->calc(__FUNCTION__);
    }

    public function getArea()
    {
        return $this->area ?  : $this->area = $this->calc(__FUNCTION__);
    }

    public function getFocalLength()
    {
        return $this->focalLength ?  : $this->focalLength = $this->calc(__FUNCTION__);
    }

    public function getFocalParameter()
    {
        return $this->focalParameter ?  : $this->focalParameter = $this->calc(__FUNCTION__);
    }

    public function getEccentricity()
    {
        return $this->eccentricity ?  : $this->eccentricity = $this->calc(__FUNCTION__);
    }

    public function getR()
    {
        return $this->getCalculator()->getR($this);
    }

    public function getFocusesSegment()
    {
        return $this->focusesSegment ?  : $this->focusesSegment = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($this->F1, $this->F2);
    }

    private function getCalculator()
    {
        return $this->getComposeCalculator()->getCalculator(EllipseCalculatorInterface::class);
    }

    private function calc($method)
    {
        return $this->getCalculator()->{$method}($this);
    }
}