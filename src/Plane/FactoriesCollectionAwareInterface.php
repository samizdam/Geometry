<?php
namespace samizdam\Geometry\Plane;

interface FactoriesCollectionAwareInterface
{
    public function setFactoriesCollection(FactoriesCollectionInterface $factoriesCollection);
    
    public function getFactoriesCollection();
}