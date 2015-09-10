<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\ConstantsAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class AngleSizeCalculationStrategy implements AngleSizeCalculationStrategyInterface
{
    
    use ConstantsAwareTrait;

    public function getAngleSize(AngleInterface $angle)
    {
        $BA = $angle->getFirstVector();
        $BC = $angle->getLastVector();
        
        $A = $BA->getLastPoint();
        $B = $BA->getFirstPoint();
        $C = $BC->getLastPoint();
        
        $Ax = $A->getX();
        $Ay = $A->getY();
        
        $Bx = $B->getX();
        $By = $B->getY();
        
        $Cx = $C->getX();
        $Cy = $C->getY();
        
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
}