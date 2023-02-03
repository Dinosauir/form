<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

use Abacus\Form\Attributes\Properties\DependsWhen;

trait IsDependable
{
    private ?DependsWhen $dependsWhen = null;

    public function dependsWhen(string $parent_key, string $parent_value): static
    {
        $this->dependsWhen = new DependsWhen($parent_key, $parent_value);

        return $this;
    }
}
