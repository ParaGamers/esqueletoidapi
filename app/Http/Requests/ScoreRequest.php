<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScoreRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        switch ($this->method()) {
            case 'POST':
                return [
                    'name' => 'required|string|max:15|min:1',
                    'score' => 'required|integer'
                ];
                break;
            default:
                return [];
        }
    }

    public function messages()
    {
        return [
            'required'  => "Debe completar el campo ':attribute'.",
            'max' => "El campo ':attribute' no debe ser mayor de :max",
            'integer'   => "Se esperaba un valor entero del elemento ':attribute'.",
            'array' => "Se esperaba un array del elemento ':attribute'.",
            'exists' => "El elemento enviado ':attribute' no existe en los registros",
            'unique' => "El elemento enviado ':attribute' ya existe en los registros",
            'uuid' => "La referencia no es válida"
        ];
    }
}
