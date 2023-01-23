<?php

namespace Abacus\Form\Form\Components;


use Abacus\Form\Form\Collections\AttributeCollection;
use Abacus\Form\Form\Collections\ComponentCollection;
use JsonSerializable;

abstract class Component implements JsonSerializable
{
    protected string $component;
    protected ComponentCollection|AttributeCollection $content;

    public function __construct(string $component, ComponentCollection|AttributeCollection $content)
    {
        $this->component = $component;
        $this->content = $content;
    }

    public function jsonSerialize()
    {
        return collect(get_object_vars($this))->toArray();
    }
}

