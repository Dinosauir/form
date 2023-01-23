<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Properties;

use JsonSerializable;

class Ajax implements JsonSerializable
{
    public function __construct(private string $route, private array $params)
    {
    }

    public function jsonSerialize()
    {
        return collect(get_object_vars($this))->toArray();
    }
}

