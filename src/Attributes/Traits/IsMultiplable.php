<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsMultiplable
{
    private bool $multiple = false;

    final public function multiple(): self
    {
        $this->multiple = true;

        return $this;
    }
}
