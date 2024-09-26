<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProject extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'image' => ['nullable','image','mimes:svg,webp,png,jpg,jpeg,svg,webp',Rule::requiredIf(function(){ return !isset($this->id);})],
            'ar.title' => ['required','string'],
            'ar.description' => ['required'],
            // 'ar.short_description' => ['required'],
            'en.title' => ['required','string'],
            'en.description' => ['required'],
            // 'en.short_description' => ['required'],
        ];
    }
}
