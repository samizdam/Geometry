<?php
namespace samizdam\Geometry\Plane\Angle;

use samizdam\Geometry\Plane\Collections\AbstractCollection;
use samizdam\Geometry\Plane\PointInterface;
use samizdam\Geometry\Exceptions;

/**
 *
 * @author samizdam
 *        
 */
class AngleCollection extends AbstractCollection implements AngleCollectionInterface
{

    /**
     * Note: angle will be construct from given points clockwise on Cartesian 2D system! 
     * Geometry library, by default, use full positive circle for present angle value: from 0 to 360 degrees. 
     * For some cases, angle can be greater than 180, not negative!
     *  
     * For example: if points presents as [A, B, C] (middle point is vertex), angle size is 270 deg for this case  
     *   B>____C 
     *   |
     *   |  270
     *   |
     *  ^A
     *  
     *  For create rigth (90) angle you must allow this order: 
     *  
     *   A
     *   |
     *   |   90
     *   |
     *   B>_____C
     *
     *   Or this: 
     *   
     *   
     *  
     * 
     * @param PointInterface[] $points
     * @param AngleFactoryInterface $angleFactory
     */
    public function __construct(array $points, AngleFactoryInterface $angleFactory)
    {
        if (count($points) < 3) {
            throw new Exceptions\DomainException("For build set of  Angles need more that 3 points");
        }
        $items = [];
        
        // and proceed edge cases
        $items[] = $angleFactory->createAngleByPoints($points[1], $points[0], $points[count($points) - 1]);
        
        for ($i = 0; $i < count($points) - 2; $i ++) {
            $items[] = $angleFactory->createAngleByPoints($points[$i + 2], $points[$i + 1], $points[$i]);
        }
        
        $items[] = $angleFactory->createAngleByPoints($points[0], $points[count($points) - 1], $points[count($points) - 2]);
        
        $this->items = \SplFixedArray::fromArray($items);
    }
}