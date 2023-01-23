<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes;

use Abacus\Form\Attributes\Traits\IsTranslated;
use Illuminate\Support\Collection;

class GroupAttribute extends Attribute
{
    use IsTranslated;

    protected bool $is_many;
    protected bool $accepts_new_values;
    public Collection|null $attributes = null;
    protected bool $is_showable;

    public function __construct($key, $attributes = null)
    {
        parent::__construct($key, 'group', null);

        $this->attributes = $attributes ?? collect([]);
    }

    final public function newValues(): self
    {
        $this->accepts_new_values = true;

        return $this;
    }

    final public function many(): self
    {
        $this->is_many = true;

        return $this;
    }

    final public function showable(): self
    {
        $this->is_showable = true;

        return $this;
    }

    final public function add(Attribute $model): void
    {
        $this->attributes[] = $model;
    }
}
