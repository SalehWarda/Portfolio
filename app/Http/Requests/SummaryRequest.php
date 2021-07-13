<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SummaryRequest extends FormRequest
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

            'name'                        =>  'required|string|max:300',
            't_a_y_s'                     =>  'required|string|max:300',
            'address'                     =>  'required|string|max:300',
            'phone'                       =>  'required|string|max:300',
            'email'                       =>  'required|email|max:300',
        ];
    }

    public function messages()
    {
        return[

            'required'    => 'This field is required',
            'string'      => 'This field should be string',
            'max'         => 'Should be less than 300',
            'email'       => 'This field should be email',
        ];
    }
}
