<?php

namespace App\Http\Requests\SuperAdmin\Program;

use App\Rules\MaxWords;
use Illuminate\Foundation\Http\FormRequest;

class StoreProgramPostRequest extends FormRequest
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
            'title' => ['required', 'string', 'max:100'],
            'excerpt' => ['nullable', 'string', new MaxWords(100)],
            'content' => ['nullable', 'string', new MaxWords(500)],
            'cover_image' =>  [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,webp',
                'max:2048',
                'dimensions:width=1080,height=500' // At least 1080×500 (but not exact)
            ],

            'images_repository' => [
                'nullable',
                'url',
                'starts_with:https://',
                // 'regex:/^https:\/\/drive\.google\.com\/drive\/folders\/.+$/',
            ],
            'updated_by' => ['nullable'],
            'subcategory' => ['required'],
            'status' => [
                'required',
                'in:draft,published,archived'
            ],


        ];
    }
}
