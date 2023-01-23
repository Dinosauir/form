<?php

declare(strict_types=1);

namespace Abacus\Form\Form\Components;

use Abacus\Form\Form\Collections\ComponentCollection;

class Card extends Component
{
    protected int $size;
    protected string $title = '';

    public function __construct(int $size = 12)
    {
        parent::__construct('card', new ComponentCollection());

        $this->size = $size;
    }

    final public function setSize(int $size): void
    {
        $this->size = $size;
    }

    final public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    final public function add(Component $component): void
    {
        $this->content->push($component);
    }
}
