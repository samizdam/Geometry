<?php
namespace samizdam\Geometry\Plane\Lines;

use samizdam\Geometry\Plane\FactoriesCollectionAwareTrait;
use samizdam\Geometry\Plane\FactoriesCollectionAwareInterface;

/**
 * 
 * @author samizdam
 *
 */
class LineSegmentCollection implements LineSegmentCollectionInterface
{
    
    use FactoriesCollectionAwareTrait;

    private $points;

    private $segments;

    public function __construct(array $points, LineFactoryInterface $lineFactory)
    {
        $this->points = $points;
        
        $segments = [];
        
        for ($i = 0; $i < count($points) - 1;) {
            $segments[] = $lineFactory->createLineSegment($points[$i], $points[++ $i]);
        }
        // and add last segment
        $segments[] = $lineFactory->createLineSegment($points[$i], $points[0]);
        
        $this->segments = \SplFixedArray::fromArray($segments);
    }

    public static function createByPolygon(PolygonInterface $polygon)
    {
        return new self($polygon->getPoints());
    }

    /**
     * Get number of Segments in the Collection
     * @return number
     */
    public function count()
    {
        return $this->segments->getSize();
    }

    /**
     * Get current LineSegment object
     *
     * @return LineSegmentInterface
     */
    public function current()
    {
        return $this->segments->current();
    }

    /**
     * Get current index of segment in Collection
     * 
     * @return number
     */
    public function key()
    {
        return $this->segments->key();
    }

    public function next()
    {
        return $this->segments->next();
    }

    public function rewind()
    {
        return $this->segments->rewind();
    }

    public function valid()
    {
        return $this->segments->valid();
    }
}