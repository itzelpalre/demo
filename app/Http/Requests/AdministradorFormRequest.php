<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorFormRequest extends FormRequest
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
            'nombre'=>'required|max:210',
            'correo'=>'required|max:50',
            'telefono'=>'required',
            'usuario'=>'required|max:50',
            'contraseña'=>'required|max:50',
            'perfil'=>'required|max:50',
            'activo'=>'required',
            'owner'=>'required|max:210',
        ];
    }
}
