<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

trait IsKeyable
{
    protected string $key;

    private function setKey(string $key): void
    {
        $this->key = $key;
    }
}
