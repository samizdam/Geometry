<?php
namespace samizdam\Geometry\Plane;

use samizdam\Geometry\GeometryUnitTestCase;

/**
 *
 * @author samizdam
 *        
 */
class FactoriesCollectionAwareTraitTest extends GeometryUnitTestCase
{

    public function testSetter()
    {
        $trait = $this->getMockForTrait(FactoriesCollectionAwareTrait::class);
        $trait->setFactoriesCollection($this->getMock(FactoriesCollectionInterface::class));
    }
}