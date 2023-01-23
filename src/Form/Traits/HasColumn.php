<?php

declare(strict_types=1);

namespace Abacus\Form\Form\Traits;

use Abacus\Form\Form\Collections\ComponentCollection;
use Abacus\Form\Form\Components\Card;
use Abacus\Form\Form\Components\Column;
use Closure;

trait HasColumn
{
    protected ComponentCollection $form;

    final public function column(Closure $callback, int $size = null): void
    {
        $column = new Column();

        if ($size) {
            $column->setSize($size);
        }

        $callback($column);

        $this->form->push($column);
    }

    final public function card(Closure $callback, int $size = null, string $title = null): void
    {
        $card = new Card();

        if ($size) {
            $card->setSize($size);
        }

        if ($title) {
            $card->setTitle($title);
        }

        $callback($card);

        $this->form->push($card);
    }

    private function setForm(ComponentCollection $collection): void
    {
        $this->form = $collection;
    }
}
