<?php

declare(strict_types=1);

namespace PHPAbles\Resettable;

use Monolog\ResettableInterface as BaseResettableInterface;

interface ResettableInterface extends BaseResettableInterface
{
    public function reset(): void;
}
