<?php

namespace App\Http\Requests;

use App\Http\Requests\Traits\BrickValidationRules;
use Illuminate\Foundation\Http\FormRequest;

class StoreBrickRequest extends FormRequest
{
    use BrickValidationRules;
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
