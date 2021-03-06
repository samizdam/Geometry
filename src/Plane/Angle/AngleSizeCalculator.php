<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;

/**
 *
 * @author samizdam
 *        
 */
class AngleSizeCalculator implements AngleSizeCalculatorInterface
{
    use FactoriesCollectionAwareTrait;

    private $angleSizeUnit;

    public function setAngleSizeUnit(AngleSizeUnitsEnum $unit)
    {
        $this->angleSizeUnit = $unit;
    }

    public function getAngleSizeUnit()
    {
        return $this->angleSizeUnit ?  : $this->angleSizeUnit = $this->getFactoriesCollection()
            ->getAngleFactory()
            ->getDefaultUnit();
    }

    public function getAngleSize(AngleInterface $angle, AngleSizeUnitsEnum $angleSizeUnit = null)
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
        
        $res = $rads = atan2($x1 * $y2 - $y1 * $x2, $x1 * $x2 + $y1 * $y2);
        
        if (empty($angleSizeUnit)) {
            $angleSizeUnit = $this->getAngleSizeUnit();
        }
        
        if ($angleSizeUnit->getTypeName() === AngleSizeUnitsEnum::DEG) {
            $res = rad2deg($rads);
            
            if ($res < 0) {
                $res = $res + 360;
            }
        }
        
        return new AngleSize($angleSizeUnit, $res);
    }
}