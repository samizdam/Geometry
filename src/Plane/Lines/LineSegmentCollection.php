<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\Collections\AbstractCollection;
use samizdam\Geometry\Plane\PointInterface;

/**
 *
 * @author samizdam
 *        
 */
class LineSegmentCollection extends AbstractCollection implements LineSegmentCollectionInterface
{

    /**
     * 
     * @param PointInterface[] $points
     * @param LineFactoryInterface $lineFactory
     */
    public function __construct(array $points, LineFactoryInterface $lineFactory)
    {
        $items = [];
        
        for ($i = 0; $i < count($points) - 1;) {
            $items[] = $lineFactory->createLineSegment($points[$i], $points[++ $i]);
        }
        // and add last segment
        $items[] = $lineFactory->createLineSegment($points[$i], $points[0]);
        
        $this->items = \SplFixedArray::fromArray($items);
    }
}