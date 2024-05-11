<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createCategoryRequest extends FormRequest
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
            'name' => 'required|max:255',
            'status' => 'required',
            'description' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Trường tên là trường bắt buộc',
            'name.max' => 'Tối đa 255 ký tự',
            'status.required' => 'Trạng thái Status là trường bắt buộc',
            'description.required' => 'Mô tả là trường bắt buộc'
        ];
    }
}
