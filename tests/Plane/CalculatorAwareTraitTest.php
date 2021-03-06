<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;

/**
 *
 * @author samizdam
 *        
 */
class CalculatorAwareTraitTest extends GeometryUnitTestCase
{

    public function testSetter()
    {
        $calc = $this->getMockForTrait(CalculatorAwareTrait::class);
        $calc->setCompositeCalculator($this->getMock(CompositeCalculatorInterface::class));
    }
}