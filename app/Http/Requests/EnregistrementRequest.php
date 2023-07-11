<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnregistrementRequest extends FormRequest
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
            'nom' => 'required|min :2',
            'prenom' => 'required|min: 2',
            'email' => 'required|email',
            'telephone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est requis',
            'nom.min' => 'Le cham nom doit contenir au moins 2 caracteres',
            'prenom.required' => 'Le champ prenom est requis',
            'prenom.min' => 'Le cham prenom doit contenir au moins 2 caracteres',
            'email.required' => 'Le champ email est requis',
            'telephone.required' => 'Le champ telephone est requis',
        ];
    }
}
