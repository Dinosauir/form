<?php

namespace Abacus\Form\Shared\Contracts;

use Throwable;

interface DomainRuleException extends Throwable
{
    public function getDomainMessage(): ?array;
}
