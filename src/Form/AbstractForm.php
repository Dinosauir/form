<?php


declare(strict_types=1);

namespace Abacus\Form\Form;

use Abacus\Form\Form\Collections\ComponentCollection;
use Abacus\Form\Form\Contracts\FormableInterface;
use Abacus\Form\Form\Traits\HasColumn;
use Abacus\Form\Form\Traits\HasModel;
use JsonSerializable;

abstract class AbstractForm implements JsonSerializable
{
    use HasColumn;
    use HasModel;

    public function __construct(?FormableInterface $model = null)
    {
        $this->setModel($model?->toFormFormat());
        $this->setForm(new ComponentCollection());
    }

    final public function getForm(): static
    {
        return $this;
    }

    public function jsonSerialize()
    {
        return collect(get_object_vars($this))->toArray();
    }
}
