<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\Point\PointInterface;
use samizdam\Geometry\Plane\Lines\LineInterface;

/**
 *
 * @author samizdam
 *        
 */
interface AngleInterface
{

    /**
     *
     * @return LineInterface
     */
    public function getFirstVector();

    /**
     *
     * @return LineInterface
     */
    public function getLastVector();

    /**
     *
     * @param string $angleSizeUnit
     * @return float
     */
    public function getSize($angleSizeUnit = AngleSizeUnitsEnum::DEFAULT_TYPE);

    /**
     *
     * @param AngleSizeUnitsEnum $angleSizeUnit
     * @return AngleSizeInterface
     */
    public function getSizeInUnits(AngleSizeUnitsEnum $angleSizeUnit = null);

    /**
     *
     * @return PointInterface
     */
    public function getVertexPoint();
}