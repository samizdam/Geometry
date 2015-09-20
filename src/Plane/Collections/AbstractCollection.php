<?php
namespace samizdam\Geometry\Plane\Collections;

/**
 *
 * @author samizdam
 *        
 */
abstract class AbstractCollection implements \Iterator, \Countable
{

    protected $items;

    /**
     * Get number of Segments in the Collection
     *
     * @return number
     */
    public function count()
    {
        return $this->items->getSize();
    }

    /**
     * Get current LineSegment object
     *
     * @return LineSegmentInterface
     */
    public function current()
    {
        return $this->items->current();
    }

    /**
     * Get current index of segment in Collection
     *
     * @return number
     */
    public function key()
    {
        return $this->items->key();
    }

    public function next()
    {
        return $this->items->next();
    }

    public function rewind()
    {
        return $this->items->rewind();
    }

    public function valid()
    {
        return $this->items->valid();
    }
}