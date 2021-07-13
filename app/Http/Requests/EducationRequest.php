<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducationRequest extends FormRequest
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

            'name_of_specialty'           =>  'required|string|max:300',
                'degree_of_specialty'         =>  'required|string|max:300',
                'study_period'                =>  'required|string|max:300',
                'place_of_study'              =>  'required|string|max:300',
                'about_of_specialty'          =>  'required|string|max:700',
            //
        ];
    }

    public function messages()
    {
        return[

            'required'    => 'This field is required',
            'string'      => 'This field should be string',
            'max'         => 'Its so long',
            'email'       => 'This field should be email',
        ];
    }
}
