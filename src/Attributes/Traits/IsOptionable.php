<?php

declare(strict_types=1);

namespace Abacus\Form\Attributes\Traits;

use Abacus\Form\Attributes\Properties\Option;

trait IsOptionable
{
    protected array $options;

    final public function options(array $options): static
    {
        if (count($options) < 1) {
            $this->options = [new Option('', trans('form.select-loading-items'))];

            return $this;
        }

        $data = [];

        $has_keys = !(array_key_exists(0, $options));
        $options = $this->resolveBoolean($options);

        foreach ($options as $key => $value) {
            $data[] = (new Option($has_keys ? $key : $value, $value));
        }

        $this->options = $data;

        return $this;
    }

    private function resolveBoolean(array $options): array
    {
        if (array_key_exists("true", $options)) {
            $options[1] = $options['true'];
            unset($options['true']);
        }

        if (array_key_exists("false", $options)) {
            $options[0] = $options['false'];
            unset($options['false']);
        }

        return $options;
    }
}
