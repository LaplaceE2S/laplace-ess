<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'structure' => 'bail|min:3|max:20|alpha_num',
            'statut' => 'bail|required|min:3|max:20|alpha',
            'budget' => 'bail|required|numeric',
            'siret' => 'bail|required|max:14|numeric',
            'rue' => 'bail|required|min:3|max:50|alpha_num',
            'postal' => 'bail|required|max:5|numeric',
            'ville' => 'bail|required|min:3|max:20|alpha',
            'nom' => 'bail|required|min:3|max:20|alpha',
            'prenom' => 'bail|required|min:3|max:20|alpha',
            'telephone' => 'bail|required|min:11|max:0989999999|numeric',
            'email' => 'bail|required|email|unique:users,email' . $this->user->id,
            'url' => 'url'
        ];
    }
}