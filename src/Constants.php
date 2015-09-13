<?php
namespace samizdam\Geometry;

/**
 * You can define you own class with overriden constants before PlaneGeometry constructor will be called.
 *
 *
 * @author samizdam
 *        
 */
if (! class_exists(Constants::class)) {

    class Constants extends DefaultConstants
    {

    }
}