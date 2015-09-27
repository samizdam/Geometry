<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
class AngleSize implements AngleSizeInterface
{

    /**
     *
     * @var AngleSizeUnitsEnum
     */
    private $type;

    /**
     *
     * @var float
     */
    private $value;

    /**
     *
     * @param AngleSizeUnitsEnum $angleSizeUnit
     * @param float $value
     */
    public function __construct(AngleSizeUnitsEnum $angleSizeUnit, $value)
    {
        $this->type = $angleSizeUnit;
        $this->value = $value;
    }

    /**
     *
     * @return AngleSizeUnitsEnum
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->type->getTypeName();
    }

    /**
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}