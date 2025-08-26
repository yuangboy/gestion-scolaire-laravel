<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:3'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom est requis',
            'name.min' => 'Le nom doit avoir au moins 3 caractères',
            'email.required' => 'L\'addresse email est requise',
            'email.email' => 'L\'addresse email n\'est pas valide',
            'email.unique' => 'L\'addresse email est déjà utilisée',
            'password.required' => 'Le mot de passe est requis',
            'password.min' => 'Le mot de passe doit avoir au moins 4 caractères',
            'password.confirmed' => 'Les mots de passe ne correspondent pas',
        ];
    }
}
