<?php

namespace Interop\Container\Compiler;

/**
 * Objects providing definitions of entries (ie. container builders) should implement this interface.
 */
interface ContainerBuilderInterface
{
    /**
     * Returns an array of available definitions.
     *
     * @return DefinitionInterface[] The key is the identifier of the entry,
     *                               the value is an object implementing DefinitionInterface
     */
    public function getDefinitions();
}
