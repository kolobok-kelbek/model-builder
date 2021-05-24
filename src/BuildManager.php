<?php

declare(strict_types=1);

namespace ModelBuilder;

interface BuildManager
{
    public static function createBuilder(string $modelName): Builder;
}
