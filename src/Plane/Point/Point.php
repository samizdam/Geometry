<?php
namespace samizdam\Geometry\Plane\Point;

use samizdam\Geometry\Constants;

/**
 *
 * @author samizdam
 *        
 */
class Point implements PointInterface
{

    private $x;

    private $y;

    private $angular;

    private $r;

    /**
     *
     * @param float $x
     * @param float $y
     */
    public function __construct($x, $y)
    {
        $this->x = (float) $x;
        $this->y = (float) $y;
    }

    public static function createByPolarCoords($r, $angular)
    {
        if ($angular === (1 / 2) * Constants::π || $angular === 3 * Constants::π / 2) {
            $x = 0;
        } else {
            $x = $r * cos($angular);
        }
        
        $y = $r * sin($angular);
        $point = new self($x, $y);
        $point->angular = $angular;
        $point->r = $r;
        return $point;
    }

    public function getAngular()
    {
        return $this->angular ?  : $this->angular = atan2($this->y, $this->x);
    }

    public function getR()
    {
        return $this->r ?  : $this->r = sqrt(pow($this->y, 2) + pow($this->x, 2));
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }
}
