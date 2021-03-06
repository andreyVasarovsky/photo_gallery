<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name' => 'required|string',
            'phone' => 'required|string|unique:clients,phone,'.request()->get('id'),
            'location' => 'required|string',
            'email' => 'required|email',
            'theme_ids' => 'nullable|array',
            'theme_ids.*' => 'nullable|integer|exists:themes,id',
        ];
    }
}
