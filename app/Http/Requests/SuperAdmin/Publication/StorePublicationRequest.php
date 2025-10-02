<?php

namespace App\Http\Requests\SuperAdmin\Publication;

use App\Rules\MaxWords;
use Illuminate\Foundation\Http\FormRequest;

class StorePublicationRequest extends FormRequest
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
            'overview' => ['nullable', 'string', new MaxWords(500)],
            'image' =>  [
                'nullable',
                'image',
                'mimes:jpeg,png,jpg,gif,webp',
                'max:2048',
                'dimensions:width=500,height=500' // At least 500 (but not exact)
            ],
            'authors' => 'sometimes|array',
            'authors.*' => 'string|max:50',
              'publication_link' => [
                'nullable',
                'url', // Valid URL format
                'active_url', // Verify DNS record exists
                'starts_with:https://', // Force HTTPS
                'max:255', // Reasonable length limit
                // 'regex:/\.pdf$/i', // Ends with .pdf (case insensitive)
            ],
        ];

    }
}
