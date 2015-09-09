<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Plane\PlaneGeometry;

/**
 *
 * @author samizdam
 *        
 */
class Angle implements AngleInterface
{

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

    public function getSize()
    {
        $BA = PlaneGeometry::getInstance()->createLineSegment($this->B, $this->A);
        $BC = PlaneGeometry::getInstance()->createLineSegment($this->B, $this->C);
        
        $Ax = $this->A->getX();
        $Ay = $this->A->getY();
        
        $Bx = $this->B->getX();
        $By = $this->B->getY();
        
        $Cx = $this->C->getX();
        $Cy = $this->C->getY();
        
        $coordSumBAx = ($Ax - $Bx);
        $coordSumBAy = ($Ay - $By);
        
        $coordSumBCx = ($Cx - $Bx);
        $coordSumBCy = ($Cy - $By);
        
        $x1 = $coordSumBCx;
        $x2 = $coordSumBAx;
        $y1 = $coordSumBCy;
        $y2 = $coordSumBAy;
        
        $rads = atan2($x1 * $y2 - $y1 * $x2, $x1 * $x2 + $y1 * $y2);
        
        $res = rad2deg($rads);
        
        if ($res < 0) {
            $res = $res + 360;
        }
        return $res;
    }

    public function getVertexPoint()
    {
        return $this->B;
    }
}