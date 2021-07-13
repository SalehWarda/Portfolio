<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRrequest extends FormRequest
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

            'name'     =>  'required|string|max:250',
            'email'    =>  'required|email',
            'subject'  =>  'required|string|max:250',
            'message'  =>  'required|string|max:250',
        ];
    }

    public function messages()
    {
        return[

            'required'   => 'This field is required',
            'string'     => 'This field should be string',
            'max'        => 'Should be less than 250',
            'email'      => 'This field should be email',
        ];
    }
}
