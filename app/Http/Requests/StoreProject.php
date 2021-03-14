<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProject extends FormRequest
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
            'title' => 'string',
            'description' => 'string|nullable',
            'client' => 'string',
            'minimum_years_with_signifly' => 'integer',
            'education' => 'array|nullable',
            'education.*' => 'filled',
            'skills' => 'array|nullable',
            'skills.*' => 'filled',
        ];
    }


    public function prepareForValidation()
    {
        return $this->merge([
            'minimum_years_with_signifly' => $this->minimum_years_with_signifly == null ? 0 : $this->minimum_years_with_signifly,
        ]);
    }
}
