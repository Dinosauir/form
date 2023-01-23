<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsComponentable;
use Abacus\Form\Attributes\Traits\IsKeyable;
use Abacus\Form\Attributes\Traits\IsLabelable;
use Abacus\Form\Attributes\Traits\IsRequirable;
use JsonSerializable;

abstract class Attribute implements JsonSerializable
{
    use IsLabelable;
    use IsKeyable;
    use IsComponentable;
    use IsRequirable;

    public function __construct(
        string $key,
        string $component,
        string $label = null
    ) {
        $this->setKey($key);
        $this->setComponent($component);
        $this->setLabel($label ?? $key);
    }

    public function jsonSerialize()
    {
        return collect(get_object_vars($this))->toArray();
    }
}
