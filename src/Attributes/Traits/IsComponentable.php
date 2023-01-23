<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsComponentable
{
    protected string $component;

    private function setComponent(string $component): void
    {
        $this->component = $component;
    }
}
