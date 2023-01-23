<?php

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;

class NumberAttribute extends Attribute
{
    use IsMakeable;

    public function __construct(string $key, string $label)
    {
        parent::__construct($key, 'number', $label);
    }
}

