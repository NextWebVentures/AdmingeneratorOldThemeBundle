<?php

namespace Admingenerator\GeneratorBundle\Generator;


interface GeneratorInterface
{

    /**
     * Set the controller from routing request parameter _controller
     * @param string $controller
     */
    function setController($controller);
    
    /**
     * Give the cache path to save the files 
     * 
     * @param string $namespace The namespace of the bundle
     * @param string $bundle_name the bundle name
     * 
     * @return string
     */
    function getCachePath($namespace, $bundle_name);
    
    /**
     * Run builders & create files in cache
     */
    function build();
    
}