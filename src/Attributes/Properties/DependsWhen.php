<?php

namespace Abacus\Form\Attributes\Properties;

class DependsWhen
{
    public function __construct(
        private string $parent_key,
        private string|int|bool|float $parent_value
    )
    {
    }
}
