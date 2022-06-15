<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecategoryRequest extends FormRequest
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
           'name'=>'required|min:3|max:255',
           'slug'=>'required|min:3|max:255|unique:categories',
           'status'=>'required',
           'order_by'=>'required|numeric',
        ];
    }

    public function messages()
    {
       return [
           'name.required'=>'category name is required', 
           'name.min'=>'category name should be at least 3 charachter'

       ];
    }

}
