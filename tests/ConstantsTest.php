<?php
namespace samizdam\Geometry;

/**
 *
 * @author samizdam
 *        
 */
class ConstantsTest extends GeometryUnitTestCase
{

    /**
     * @covers samizdam\Geometry\Constants
     */
    public function testConstantOverriding()
    {
        $this->assertEquals(4, Constants::π);
    }
}

class Constants extends DefaultConstants
{

    const π = 4;
}