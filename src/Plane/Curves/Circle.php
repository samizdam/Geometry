<?php
namespace samizdam\Geometry\Plane\Curves;

use samizdam\Geometry\Constants;
use samizdam\Geometry\Plane\PointInterface;

/**
 * 
 * @author samizdam
 *
 */
class Circle
{

    private $pointO;

    private $R;

    public function __construct(PointInterface $pointO, $R)
    {
        $this->pointO = $pointO;
        $this->R = (float) $R;
    }

    public function getPointO()
    {
        return $this->pointO;
    }

    public function getR()
    {
        return $this->R;
    }

    public function getLength()
    {
        return 2 * $this->R * Constants::π;
    }

    public function getArea()
    {
        
        return Constants::π * pow($this->R, 2);
    }
}