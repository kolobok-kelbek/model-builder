<?php

declare(strict_types=1);

namespace ModelBuilder\Analyzer;

use ModelBuilder\Analyzer;
use ReflectionClass;
use ReflectionException;
use ReflectionProperty;

class SetterAnalyzer implements Analyzer
{
    public function can(object|string $model, string $fieldName): bool
    {
        try {
            $reflectionClass = new ReflectionClass($model);
        } catch (ReflectionException) {
            return false;
        }

        try {
            $method = $reflectionClass->getMethod($fieldName);
        } catch (ReflectionException $e) {
            return false;
        }

        return $method->getModifiers() === ReflectionProperty::IS_PUBLIC;
    }
}
