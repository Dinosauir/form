<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;
use Abacus\Form\Attributes\Traits\IsOptionable;
use Abacus\Form\Attributes\Traits\IsTranslated;

class CheckboxAttribute extends Attribute
{
    use IsTranslated;
    use IsMakeable;
    use IsOptionable;

    public function __construct(string $key, string $label)
    {
        parent::__construct($key, 'checkbox', $label);
    }
}
