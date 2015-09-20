<?php
namespace samizdam\Geometry\Plane\Angle;

/**
 *
 * @author samizdam
 *        
 */
interface AngleCollectionInterface extends \Iterator, \Countable
{

    /**
     *
     * (non-PHPdoc)
     * 
     * @see Iterator::current()
     * @return AngleInterface
     */
    public function current();
}