<?php
namespace samizdam\Geometry\Plane\Point;

/**
 *
 * @author samizdam
 *        
 */
class Point implements PointInterface
{

    protected $x;

    protected $y;

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
        if ($angular === (1 / 2) * M_PI || $angular === 3 * M_PI / 2) {
            $x = 0;
        } else {
            $x = $r * cos($angular);
        }
        
        $y = $r * sin($angular);
        $point = new self($x, $y);
        return $point;
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
