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
            'name' => 'string|max:60',
            'bio' => 'string',
            'job_title' => 'string|max:60',
            'position' => 'in:Strategy,Consulting,Innovation,Tech,Design',
            'years_with_signifly' => 'numeric',
            'phone' => 'string|nullable',
            'email' => 'email',
            'profile_image' => 'file|mimes:jpg,png,jpeg',
            'skills' => 'array|nullable',
            'skills.*' => 'filled',
        ];
    }
}
