<?php

namespace App\Http\Requests\Dashboard\Slider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSlider extends FormRequest
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
        $inputs = [
            'link' => ['nullable','url'],
            'ar.title' => ['required','string'],
            'ar.description' => ['nullable'],
            'en.title' => ['required','string'],
            'en.description' => ['nullable'],
            // 'type' => ['required','in:image,video'],
            'image' => ['nullable','image','mimes:svg,webp,png,jpg,jpeg,svg,webp',Rule::requiredIf(function(){ return !isset($this->id);})],
            'bg_image' => ['nullable','image','mimes:svg,webp,png,jpg,jpeg,svg,webp',Rule::requiredIf(function(){ return !isset($this->id);})]
        ];



        return $inputs;
    }
}
