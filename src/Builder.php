<?php

declare(strict_types=1);

namespace ModelBuilder;

interface Builder
{
    public function build(int $useWay): object;

    public function clean(): void;
}
