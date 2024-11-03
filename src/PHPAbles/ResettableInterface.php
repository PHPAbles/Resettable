<?php

declare(strict_types=1);

namespace PHPAbles;

use Monolog\ResettableInterface as MonologResettable,
    Symfony\Contracts\Service\ResetInterface as SymfonyResettable;

interface ResettableInterface extends MonologResettable, SymfonyResettable
{
    public function reset(): void;
}
