<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productoRequest extends FormRequest
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
}
