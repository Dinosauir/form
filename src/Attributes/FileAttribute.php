<?php

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;
use Abacus\Form\Attributes\Traits\IsMultiplable;

class FileAttribute extends Attribute
{
    use IsMakeable;
    use IsMultiplable;

    public function __construct(string $key, string $label = null)
    {
        parent::__construct($key, 'file', $label);
    }
}
