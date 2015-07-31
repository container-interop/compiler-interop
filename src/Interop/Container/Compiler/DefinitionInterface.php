<?php

namespace Interop\Container\Compiler;

/**
 * Objects implementing the DefinitionInterface represent a definition of a container entry.
 * They can be "rendered" to PHP code using the toPhpCode() method.
 */
interface DefinitionInterface
{
    /**
     * Returns a string of PHP code generating the container entry.
     *
     * The PHP code MUST be a closure, and that closure MUST take one argument that is a
     * Interop\Container\ContainerInterface object.
     * The function MUST return the entry generated.
     *
     * For instance, this is a valid PHP string:
     *
     * function(Interop\Container\ContainerInterface $container) {
     *     $service = new MyService($container->get('my_dependency'));
     *     return $service;
     * }
     *
     * @return string
     */
    public function toPhpCode();
}
