<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsMakeable
{
    public static function make(string $key, string $label): self
    {
        return new self($key, $label);
    }
}
