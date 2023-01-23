<?php

declare(strict_types=1);

namespace Abacus\Form\Form\Contracts;

use JsonSerializable;

interface FormableInterface
{
    public function toFormFormat(): JsonSerializable;
}
