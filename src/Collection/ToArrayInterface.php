<?php

declare(strict_types=1);

namespace PhpPp\Core\Contract\Collection;

interface ToArrayInterface
{
    /** @return array<string|int, mixed> */
    public function toArray(): array;
}
