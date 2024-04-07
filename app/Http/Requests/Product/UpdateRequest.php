<?php

namespace App\Http\Requests\Product;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:10|max:255',
            'article' => 'required|unique:products,article,' . $this->route('product')->id . '|regex:/^[a-zA-Z0-9]+$/',
            'status' => 'required',
            'data' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'article.regex' => 'The field must contain only Latin characters and numbers.',
        ];
    }

    public function failedValidation(Validator $validator)
    {    throw new HttpResponseException(response()->json(
        [
            'success' => false,
            'message' => 'Validation errors',
            'data'    => $validator->errors()
        ])->setStatusCode(403));
    }
}
