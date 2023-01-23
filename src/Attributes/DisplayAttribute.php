<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;

class DisplayAttribute extends Attribute
{
    use IsMakeable;

    public function __construct(string $key, string $label)
    {
        parent::__construct($key, 'display', $label);
    }
}
