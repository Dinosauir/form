<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsTranslated
{
    protected bool $is_translated = false;

    final public function translated(): static
    {
        $this->is_translated = true;

        return $this;
    }
}
