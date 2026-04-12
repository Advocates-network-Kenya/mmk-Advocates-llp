<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreTeamRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            //'slug' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5400000',
            'qualifications' => 'required',
            'content' => 'required',
            'role' => 'required',
            //'user_id' => 'required',
        ];
    }
}
