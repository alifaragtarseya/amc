<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreService extends FormRequest
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
            'image' => ['nullable','image','mimes:png,jpg,jpeg',Rule::requiredIf(function(){ return !isset($this->id);})],
            'icon' => ['nullable','image','mimes:png,jpg,jpeg',Rule::requiredIf(function(){ return !isset($this->id);})],
            'video_url' => ['nullable'],
            'ar.title' => ['required'],
            'ar.description' => ['nullable'],
            'ar.short_description' => ['required'],
            'en.title' => ['required','string'],
            'en.description' => ['nullable'],
            'en.short_description' => ['required'],
        ];
    }
}
