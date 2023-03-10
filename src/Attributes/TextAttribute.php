<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;
use Abacus\Form\Attributes\Traits\IsTranslated;

class TextAttribute extends Attribute
{
    use IsTranslated;
    use IsMakeable;

    public function __construct(string $key, string $label)
    {
        parent::__construct($key, 'text', $label);
    }
}

