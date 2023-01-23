<?php

declare(strict_types=1);

namespace Abacus\Form\Form\Traits;

use JsonSerializable;

trait HasModel
{
    private ?JsonSerializable $data;

    final public function getModel(): ?JsonSerializable
    {
        return $this->data;
    }

    final public function overrideModel(JsonSerializable $resource): void
    {
        $this->data = $resource;
    }

    private function setModel(?JsonSerializable $model = null): void
    {
        $this->data = $model;
    }
}
