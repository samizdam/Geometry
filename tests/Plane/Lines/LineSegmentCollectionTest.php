<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\GeometryUnitTestCase;
use samizdam\Geometry\Plane\Point\Point;

/**
 *
 * @author samizdam
 *        
 */
class LineSegmentCollectionTest extends GeometryUnitTestCase
{

    public function testCount()
    {
        $collection = new LineSegmentCollection([
            new Point(0, 0),
            new Point(1, 1),
            new Point(2, 1),
            new Point(2, 0)
        ], new LineFactory());
        
        $this->assertEquals(4, count($collection));
    }

    public function testKey()
    {
        $collection = new LineSegmentCollection([
            new Point(0, 0),
            new Point(1, 1),
            new Point(2, 1),
            new Point(2, 0)
        ], new LineFactory());
        
        foreach ($collection as $key => $segment) {
            // do nothing: only rewind to end
        }
        $this->assertEquals(4, $collection->key());
    }
}