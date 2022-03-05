<?php

namespace App\Http\Requests\Visit\Admin;

use App\Models\Visit;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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
            'full_name' => [
                'required',
                'string',
                Rule::unique('visits', 'full_name')->whereNot('status', Visit::STATUS_COMPLETED),
            ],
            'phone' => [
                'required',
                'string',
                Rule::unique('visits', 'phone')->whereNot('status', Visit::STATUS_COMPLETED),
            ],
            'email' => 'required|email',
            'location' => 'required|string',
            'date' => 'required|date',
            'status' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'full_name.unique' => 'Request already exist or still in progress',
            'phone.unique' => 'Request already exist or still in progress',
        ];
    }
}
