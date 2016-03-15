<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ValidatePostRequest extends Request
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
<<<<<<< HEAD
    public function rules()
    {
        return [
            'user_id' => 'required',
            'title'   => 'required|min:10',
            'description' => 'required|min:10'
        ];
    }

    /**
     * @return array
     */
    public function messages()
    {
        return [
            'user_id.required' => 'User id manquant',
            'title.required' => 'Titre obligatoire',
            'title.min' => 'Titre > 10 caractères',
            'description.required' => 'Description obligatoire',
            'description.min' => 'Description > 10 caractères'
        ];
    }
}
=======
public function rules()
{
    return [
        'user_id' => 'required',
        'title'   => 'required|min:10',
        'description' => 'required|min:10'
    ];}

public function messages(){

    return [

        'user_id.required' => 'User id manquant',
        'title.required' => 'Titre obligatoire',
        'title.min' => 'Titre > 10 caractères',
        'description.required' => 'Description obligatoire',
        'Description.min' => 'Description > 10 caractères'
    ];

}
}
>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
