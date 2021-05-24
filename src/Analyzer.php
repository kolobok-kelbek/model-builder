<?php

declare(strict_types=1);

namespace ModelBuilder;

interface Analyzer
{
    public function can(string|object $model, string $fieldName): bool;
}
