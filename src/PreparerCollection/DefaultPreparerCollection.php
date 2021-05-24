<?php

declare(strict_types=1);

namespace ModelBuilder\PreparerCollection;

use ModelBuilder\Preparer;
use ModelBuilder\PreparerCollection;

class DefaultPreparerCollection implements PreparerCollection
{
    /** @var array<Preparer> */
    protected array $preparers;

    public function __construct(Preparer ...$preparer)
    {
        $this->preparers = $preparer;
    }

    public function hasPreparers(): bool
    {
        return !empty($this->preparers);
    }

    public function prepareFieldName(string $fieldName): string
    {
        $formattedFieldName = $fieldName;
        foreach ($this->preparers as $preparer) {
            $formattedFieldName = $preparer->prepare($fieldName);
        }

        return $formattedFieldName;
    }
}
