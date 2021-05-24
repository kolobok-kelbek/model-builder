<?php

declare(strict_types=1);

namespace ModelBuilder;

interface PreparerCollection
{
    public function hasPreparers(): bool;

    public function prepareFieldName(string $fieldName): string;
}
