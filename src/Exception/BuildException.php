<?php

declare(strict_types=1);

namespace ModelBuilder\Exception;

use Exception;
use Throwable;

class BuildException extends Exception
{
    public function __construct($message, Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
    }
}
