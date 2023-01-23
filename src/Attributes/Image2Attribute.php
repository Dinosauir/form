<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsMakeable;

class Image2Attribute extends Attribute
{
    use IsMakeable;

    public function __construct(string $key, string $label = null)
    {
        parent::__construct($key, 'image2', $label);
    }
}
