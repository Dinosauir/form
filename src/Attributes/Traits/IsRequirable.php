<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsRequirable
{
    protected bool $required = false;

    final public function required(): self
    {
        $this->required = true;

        return $this;
    }
}
