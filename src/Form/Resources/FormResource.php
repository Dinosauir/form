<?php

namespace Abacus\Form\Form\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormResource extends JsonResource
{
    public function toArray($request): array
    {
        return ['form' => $this->resource, 'model' => $this->resource->getModel()];
    }
}
