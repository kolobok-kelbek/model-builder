<?php

declare(strict_types=1);

namespace ModelBuilder\Manager;

use JetBrains\PhpStorm\Pure;
use ModelBuilder\Analyzer;
use ModelBuilder\Builder;
use ModelBuilder\BuildManager;
use ModelBuilder\Way;

class DefaultBuildManager implements BuildManager
{
    /** @var array<Way> */
    protected static array $wayMap = [];

    /** @var array<int, Analyzer> */
    protected static array $analyzers = [];

    public function __construct(array $wayMap, array $analyzers)
    {
        static::$wayMap = $wayMap;
        static::$analyzers = $analyzers;
    }

    #[Pure]
    public static function createBuilder(string $modelName): Builder
    {
        return new Builder\DefaultBuilder($modelName, static::$wayMap, static::$analyzers);
    }
}
