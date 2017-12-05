<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $success = "Upload réussi";
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
            'image' => 'bail|required|max:2048',
            'mail_from' => 'bail|required|email|min:10|max:255',
            'mail_to' => 'bail|required|email|min:10|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'image.required' => 'Choisissez un fichier à uploader !',
            'image.max' => 'Le fichier est trop volumineux !',
            'mail_from.required' => 'Votre E-mail est obligatoire !',
            'mail_from.email' => 'L\'E-mail renseignée est invalide !',
            'mail_to.required'  => 'L\'E-mail du destinataire est obligatoire !',
            'mail_to.email' => 'L\'E-mail renseignée est invalide !'
        ];
    }
}
