<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Builder\Function_;
use PhpParser\Builder\FunctionLike;

class SkillRequest extends FormRequest
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
            'n_o_s'  => 'required|string|max:50',
            'l_o_e'  => 'required|integer',
        ];
    }

    public function messages()
    {
        return[

            'required' => 'This field is required',
            'string' => 'This field should be string',
            'max' => 'Should be less than 50',
            'integer' => 'This field should be number',
        ];
    }
}
