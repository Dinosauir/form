<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Properties;

use JsonSerializable;

class Option implements JsonSerializable
{
    public function __construct(protected string|int $key, protected string|int $value)
    {
    }

    public function jsonSerialize()
    {
        return collect(get_object_vars($this))->toArray();
    }
}

