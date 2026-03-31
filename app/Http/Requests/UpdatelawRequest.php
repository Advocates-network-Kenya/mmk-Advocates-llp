<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdatelawRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'title' => 'required',
            'description' => 'required',
           //  'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5400000',
            'content' => 'required',
            'icon' => 'required',
           // 'slug' => 'required',
            //'user_id' => 'required',

        ];
    }
}
