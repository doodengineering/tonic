<?php

namespace DOOD\Tonic\Core;

use Composer\ClassMapGenerator\ClassMapGenerator;

class Filesystem
{
    public string $root;

    public function __construct(string $root)
    {
        $this->root = $root;
    }

    /**
     * Retrieve an array of class names.
     *
     * @param string $relative The relative directory path (with leading slash).
     *
     * @since 1.0.0
     */
    public function classes(string $directory): array
    {
        return array_keys(ClassMapGenerator::createMap($this->root.$directory));
    }

    public function path(string $relative): string
    {
        return $this->root.$relative;
    }
}