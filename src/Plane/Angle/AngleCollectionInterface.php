<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\Collections\CollectionInterface;

/**
 *
 * @author samizdam
 *        
 */
interface AngleCollectionInterface extends CollectionInterface
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