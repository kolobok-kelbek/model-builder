<?php

declare(strict_types=1);

namespace ModelBuilder;

interface Way
{
    public function pass(string|object $model, array $map): object;
}
