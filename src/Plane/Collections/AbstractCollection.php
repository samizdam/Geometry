<?php
namespace samizdam\Geometry\Plane\Collections;

/**
 *
 * @author samizdam
 *        
 */
abstract class AbstractCollection implements CollectionInterface
{

    /**
     * 
     * @var \SplFixedArray
     */
    protected $items;
    
    /**
     * 
     * (non-PHPdoc)
     * @see \samizdam\Geometry\Plane\Collections\CollectionInterface::toArray()
     * 
     * @return array
     */
    public function toArray()
    {
        return $this->items->toArray();
    }

    /**
     * Get number of items in the Collection
     *
     * @return number
     */
    public function count()
    {
        return $this->items->getSize();
    }

    /**
     * 
     *
     * @return mixed 
     */
    public function current()
    {
        return $this->items->current();
    }

    /**
     * Get index of current item
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