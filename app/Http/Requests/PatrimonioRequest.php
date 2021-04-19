<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatrimonioRequest extends FormRequest
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
            'imagem' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'localizacao'=> 'nullable',
            'titulo'=> 'required',
            'potencia_instalada_servico'=> 'nullable',
            'potencia_disponivel'=> 'nullable',
            'ano'=> 'required',
            'nivel'=> 'nullable',
            'transformadores'=> 'nullable',
            'ponta_data'=> 'nullable',
            'nota'=> 'nullable',
            'barramento'=> 'nullable',
            'configuracao'=> 'nullable',
            'capacidade_linhas'=> 'nullable',
            'circuito'=> 'nullable',
            'comprimento'=> 'nullable',
            'tipo_torres'=> 'nullable',
            'tipo_condutor'=> 'nullable',
            'tipo_isoladores'=> 'nullable',
            'cabo_guarda'=> 'nullable',
            'estado_actual' => 'nullable',
            'tipo' => 'required'

        ];

    }
}
