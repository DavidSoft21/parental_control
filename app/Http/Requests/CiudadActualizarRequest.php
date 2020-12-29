<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Ciudad;
class CiudadActualizarRequest extends FormRequest
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
            'ciudades.nombre' => 'required'
        ];
    }

    public function messages(){
        return [
            'nombre.required' => 'Añade un nombre'
        ];
    }

    public function actualizarCiudad(Ciudad $ciudad)
    {
        $datos = $this->validated();
        $ciudad->update($datos['ciudades']);
           
    }

}

