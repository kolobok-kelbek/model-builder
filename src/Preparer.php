<?php

declare(strict_types=1);

namespace ModelBuilder;

interface Preparer
{
    public function prepare(string $setterName): string;
}
