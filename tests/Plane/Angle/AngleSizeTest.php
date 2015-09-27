<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\GeometryUnitTestCase;

/**
 *
 * @author samizdam
 *        
 */
class AngleSizeTest extends GeometryUnitTestCase
{

    public function testGetType()
    {
        $vo = new AngleSize(new AngleSizeUnit(), 90);
        $this->assertInstanceOf(AngleSizeUnitsEnum::class, $vo->getType());
    }

    public function testGetTypeName()
    {
        $vo = new AngleSize(new AngleSizeUnit(), 90);
        $this->assertEquals(AngleSizeUnitsEnum::DEFAULT_TYPE, $vo->getTypeName());
    }
}