<?php

namespace Abacus\Form\Form\Components;

use Abacus\Form\Attributes\Attribute;
use Abacus\Form\Attributes\GroupAttribute;
use Abacus\Form\Form\Collections\AttributeCollection;
use Closure;

class Column extends Component
{
    protected int $size;
    protected ?GroupAttribute $group_builder = null;

    public function __construct(?AttributeCollection $content = null, int $size = 12)
    {
        parent::__construct('column', $content ?? new AttributeCollection());

        $this->size = $size;
    }

    final public function add(Attribute $model): void
    {
        if ($this->group_builder !== null) {
            $this->addToGroup($model);

            return;
        }

        $this->content->push($model);
    }

    final public function group(string $key, Closure $callback): GroupAttribute
    {
        $column = new self;

        $column->group_builder = new GroupAttribute($key, null);
        $callback($column);

        $this->content->push($column->group_builder);

        return $column->group_builder;
    }

    final public function setSize(int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function jsonSerialize()
    {
        $props = collect(get_object_vars($this));

        return $props->except('group_builder')->toArray();
    }

    private function addToGroup(Attribute $model): void
    {
        $this->group_builder->attributes->push($model);
    }
}
