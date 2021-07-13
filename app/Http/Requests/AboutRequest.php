<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            //
            'personalInfo'            => 'required|string|max:250',
            'field_or_specialty'      => 'required|string|max:50',
            'about_the_specialty'     => 'required|string|max:250',
            'name'                    => 'required|string|max:50',
            'birthday'                => 'required|date',
            'age'                     => 'required|integer',
            'nationality'             => 'required|string|max:50',
            'address'                 => 'required|string|max:50',
            'degree'                  => 'required|string|max:50',
            'phone'                   => 'required|max:50',
            'email'                   => 'required|email|max:50',
            'spoken'                  => 'required|string|max:50',
            'freelance'               => 'required|string|max:50',
            'photo'                   => 'required|mimes:png,jpg,jpeg',
        ];
    }

    public function messages()
    {
        return[

            'required' => 'This field is required',
            'string' => 'This field should be string',
            'max' => 'Should be less than 50',
            'email' => 'This field should be email',
            'integer' => 'This field should be number',
        ];
    }
}
