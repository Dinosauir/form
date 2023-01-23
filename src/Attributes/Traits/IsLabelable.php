<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsLabelable
{
    protected string $label;

    private function setLabel(string $label): void
    {
        $this->label = $label;
    }
}
