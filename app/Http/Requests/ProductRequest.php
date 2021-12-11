<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_name' => 'required',
            'category' => 'required|not_in:0',
            'brand' => 'required|not_in:0',
            'description' => 'required',
            'price' => 'required|integer',
            'stock' => 'required|integer',
            'photo' => 'required'
        ];
    }
}