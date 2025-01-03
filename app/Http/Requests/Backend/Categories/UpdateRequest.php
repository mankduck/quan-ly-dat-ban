<?php

namespace App\Http\Requests\BackEnd\Categories;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the Account is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Thay đổi này nếu cần kiểm tra quyền truy cập
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * The validation rules for this request ensure that the 'name' field is
     * required and must be a string with a maximum length of 200 characters.
     * This is useful for validating the data when updating an item.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'slug'     => 'required|string|max:255|unique:categories,name,' . $this->id,
            'status'   => 'required'
        ];
    }

    /**
     * Get the custom attribute names for the validation errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name'   => 'category name', 
            'slug'      => 'slug name',
            'status'    => 'status'
        ];
    }
}
