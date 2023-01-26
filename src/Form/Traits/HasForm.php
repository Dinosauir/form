<?php

declare(strict_types=1);

namespace Abacus\Form\Form\Traits;

use Illuminate\Database\Eloquent\Model;
use JsonSerializable;

trait HasForm
{
    final public function toFormFormat(): JsonSerializable
    {
        assert($this instanceof Model);

        $this->makeHidden(['created_at', 'updated_at', 'locale']);
        $model = $this->toArray();

        if (!(property_exists($this, 'translations'))) {
            return $model;
        }

        foreach ($this->translations as $translation) {
            $translation = $translation->getAttributes();

            foreach ($translation as $attribute => $value) {
                if ($this->checkFormAttribute($attribute)) {
                    continue;
                }

                $model['translations'][$attribute][$translation['locale']] = $value;
            }
        }

        return $model;
    }

    private function checkFormAttribute(string $attribute): bool
    {
        return in_array($attribute, ['id', 'locale', 'created_at', 'updated_at']) || str_ends_with($attribute, '_id');
    }
}
