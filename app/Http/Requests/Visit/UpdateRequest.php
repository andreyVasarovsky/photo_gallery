<?php

namespace App\Http\Requests\Visit;

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
            'full_name' => 'required|string|unique:visits,full_name,'.request()->get('id'),
            'phone' => 'required|string|unique:visits,phone,'.request()->get('id'),
            'email' => 'required|email',
            'location' => 'required|string',
            'date' => 'required|date',
            'status' => 'required'
        ];
    }
}
