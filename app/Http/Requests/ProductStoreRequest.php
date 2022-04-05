<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:400'],
            'price' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'discount' => ['required', 'numeric', 'between:-999999.99,999999.99'],
            'amount' => ['required', 'string'],
            'image' => ['required', 'string', 'max:255'],
        ];
    }
}