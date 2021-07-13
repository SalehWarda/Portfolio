<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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


                'name_of_experience'          =>  'required|string|max:300',
                'experience_period'           =>  'required|string|max:300',
                'experience_place'            =>  'required|string|max:300',
                'task1'                       =>  'nullable|string|max:300',
                'task2'                       =>  'nullable|string|max:300',
                'task3'                       =>  'nullable|string|max:300',
                'task4'                       =>  'nullable|string|max:300',

        ];
    }

    public function messages()

    {
        return [
            //
            'required'    => 'This field is required',
            'string'      => 'This field should be string',
            'max'         => 'Should be less than 300',
            'email'       => 'This field should be email',
        ];
    }
}
