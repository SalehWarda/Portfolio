<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FactRequest extends FormRequest
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

            'facts'      =>  'required|string|max:250',
            'clients'    =>  'required|integer',
            'projects'   =>  'required|integer',
            'h_o_s'      =>  'required|integer',
            'y_o_e'      =>  'required|integer',
        ];
    }

    public function messages()
    {
        return[

            'required' => 'This field is required',
            'string' => 'This field should be string',
            'max' => 'Should be less than 250',
            'integer' => 'This field should be number',

        ];
    }
}
