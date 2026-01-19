<?php

namespace Framework;

use Framework\Exceptions\ContainerExceptions;
use ReflectionClass;

class Container
{
    private array $definitions = [];

    public function addDefinitions(array $newDefinitions)
    {
        $this->definitions = [...$this->definitions, ...$newDefinitions];
    }

    public function resolve(string $className)
    {
        $reflectionClass = new ReflectionClass($className);

        if (!$reflectionClass->isInstantiable()) {
            throw new ContainerExceptions("Class {$className} is not instantiable");
        }

        dd($reflectionClass);
    }
}