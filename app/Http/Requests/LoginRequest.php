<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class LoginRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    //--- METHOD UNTUK MENENTUKAN RULES PADA VALIDATION LOGIN NYA ---//
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email'=> ['required','email'],
            'password' => ['required','min:8'],
        ];
    }

    //---- BUAT METHOD BARU UNTUK MENAMPILKAN CUSTOM VALIDATION MESSAGES ---//
    public function messages(){
        return [
            'name.required' => 'The User name must be filled cok!',
            'email.required' => 'The Email must be filled cok!',
            'password.required' => 'The Password must be filled cok!',
            'password.min' => 'The Password minim 8 character cok!',
        ];
    }
}