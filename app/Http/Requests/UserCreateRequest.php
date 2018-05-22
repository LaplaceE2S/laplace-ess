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
            'structure' => 'min:3|max:20|alpha_num',
            'statut' => 'required|min:3|max:20|alpha',
            'budget' => 'required|numeric',
            'siret' => 'required|max:14|numeric',
            'rue' => 'required|min:3|max:50|alpha_num',
            'postal' => 'required|max:5|numeric',
            'ville' => 'required|min:3|max:20|alpha',
            'nom' => 'required|min:3|max:20|alpha',
            'prenom' => 'required|min:3|max:20|alpha',
            'telephone' => 'required|min:11|max:0989999999|numeric',
            'email' => 'required|email',
            'url' => 'required|url'
        ];
    }
}
