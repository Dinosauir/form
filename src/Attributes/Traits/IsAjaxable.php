<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

use Abacus\Form\Attributes\Properties\Ajax;

trait IsAjaxable
{
    protected ?Ajax $ajax = null;

    public function ajax(string $route, string ...$params): static
    {
        $this->ajax = new Ajax($route, [...$params]);

        return $this;
    }
}
