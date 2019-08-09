<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TelefoneRequest extends FormRequest
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

    public function messages()
    {
        return [
            'titulo.required' => 'Preencha o campo Titulo',
            'titulo.max' => 'Titulo deve ter no maximo 255 caracteres',
            'telefone.required' => 'Preencha o campo Telefone'
        ];
    }
    public function rules()
    {
        return [
            'titulo'=>'required|max:100|',
            'telefone'=>'required',
        ];
    }
}
