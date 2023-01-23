<?php

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;

class ButtonAttribute extends Attribute
{
    use IsMakeable;

    public function __construct(string $key, string $label = null)
    {
        parent::__construct($key, 'button', $label);
    }
}
