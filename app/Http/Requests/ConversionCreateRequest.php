<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ConversionCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'source' => 'required|string|max:255',
            'destination' => 'required|string|max:255',
            'amount' => 'required|string|max:255',
            'rate' => 'required|string|max:255',
        ];
    }
}
