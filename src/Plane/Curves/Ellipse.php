<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;
use samizdam\Geometry\Plane\Lines\LineSegmentInterface;
use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
class Ellipse implements EllipseInterface, FactoriesCollectionAwareInterface
{
    use FactoriesCollectionAwareTrait;

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
     * @param unknown $semiMajorAxis
     */
    public function __construct(PointInterface $F1, PointInterface $F2, $semiMajorAxis)
    {
        $this->F1 = $F1;
        $this->F2 = $F2;
        $this->semiMajorAxis = $semiMajorAxis;
    }
    
    private function getFocusesSegment()
    {
        return $this->focusesSegment ? : $this->focusesSegment = $this->getFactoriesCollection()
            ->getLineFactory()
            ->createLineSegment($this->F1, $this->F2);
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
        return $this->semiMinorAxis ?  : $this->semiMinorAxis = $this->getSemiMajorAxis() * sqrt(1 - pow($this->getEccentricity(), 2));
    }

    public function getLength()
    {
        $a = $this->getSemiMajorAxis();
        $b = $this->getSemiMinorAxis();
        
        return $this->length ? : $this->length = 4 * ((Constants::π * $a * $b + pow(($a - $b), 2)) / ($a + $b));
    }

    public function getArea()
    {
        return $this->area ? : $this->area = Constants::π * $this->getSemiMajorAxis() * $this->getSemiMinorAxis();
    }

    public function getFocalLength()
    {
        return $this->focalLength ? : $this->focalLength = $this->getFocusesSegment()->getLength() / 2;
    }

    public function getFocalParameter()
    {
        return $this->focalParameter ? : $this->focalParameter = $this->getSemiMajorAxis() * (1 - pow($this->getEccentricity(), 2));
    }

    public function getEccentricity()
    {
        return $this->eccentricity ?  : $this->eccentricity = $this->getFocalLength() / $this->getSemiMajorAxis();
    }

    public function getR()
    {
        return $this->getSemiMinorAxis();
    }
}