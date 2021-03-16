<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeamMember extends FormRequest
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
            'name' => 'string',
            'bio' => 'string',
            'job_title' => 'string',
            'position' => 'string',
            'years_with_signifly' => 'date',
            'phone' => 'string|nullable',
            'email' => 'email',
            'profile_image' => 'string',
        ];
    }
}
