<?php

namespace Abacus\Form\Attributes\Traits;

trait IsTranslated
{
    protected bool $is_translated = false;

    final public function translated(): self
    {
        $this->is_translated = true;

        return $this;
    }
}
