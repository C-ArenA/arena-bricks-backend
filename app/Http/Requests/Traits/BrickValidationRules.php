<?php

namespace App\Http\Requests\Traits;

trait BrickValidationRules
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'description' => ['string', 'max:255'],
            'length_mm' => ['required', 'integer', 'min:100', 'max:500'],
            'height_mm' => ['required', 'integer', 'min:50', 'max:300'],
            'width_mm' => ['required', 'integer', 'min:30', 'max:200'],
            'is_produced' => ['sometimes', 'boolean'],
        ];
    }
}
