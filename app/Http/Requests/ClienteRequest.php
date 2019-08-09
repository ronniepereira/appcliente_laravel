<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
        return[
            'nome.required'=>'Preencha o campo Nome',
            'nome.max'=>'Nome deve ter no maximo 255 caracteres',
            'email.required'=>'Preencha o campo Email',
            'email.email'=>'Preencha um email valido',
            'email.max'=>'Email deve ter no maximo 255 caracteres',
            'endereco.required'=>'Preencha o campo Endereço'
        ];
    }

    public function rules()
    {
        return [
            'nome'=>'required|max:255|',
            'email'=>'required|email|max:255',
            'endereco'=>'required'
        ];
    }
}
