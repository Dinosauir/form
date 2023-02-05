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
    protected bool $is_collapsable;

    public function __construct($key, $attributes = null)
    {
        parent::__construct($key, 'group', null);

        $this->attributes = $attributes ?? collect([]);
    }

    final public function repeater(): static
    {
        $this->accepts_new_values = true;

        return $this;
    }

    final public function many(): static
    {
        $this->is_many = true;

        return $this;
    }

    final public function showable(): static
    {
        $this->is_showable = true;

        return $this;
    }

    final public function collapsable(): static
    {
        $this->is_collapsable = true;

        return $this;
    }

    final public function add(Attribute $model): void
    {
        $this->attributes[] = $model;
    }
}
