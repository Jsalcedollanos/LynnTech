<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class guardarProductos extends FormRequest
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
            'codigo' => 'required|codigo|unique:producto',
            'nombre' => 'required',
            'cantidad' => 'required',
            'valor' => 'required',
            'categoria' => 'required',
            'color' => 'required',
            'descripcion' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'codigo' => 'El codigo del producto debe ser unico',
            'nombre' => 'El campo "nombre" es requerido',
            'cantidad' => 'El campo "cantidad" es requerido',
            'valor' => 'El campo "valor" es requerido',
            'categoria' => 'El campo "categoria" es requerido',
            'color' => 'El campo "color" es requerido',
            'descripcion' => 'El campo "descripcion" es requerido'
        ];
    }
}
