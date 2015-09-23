<?php
namespace samizdam\Geometry\Plane\Collections;

interface CollectionInterface extends \Iterator, \Countable
{
    /**
     * Get items in native php array
     * @return array
     */
    public function toArray();
}