<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Ciudad;

class CiudadCreateRequest extends FormRequest
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

    public function crearCiudad()
    {
        $datos = $this->validated();
        $ciudad = Ciudad::create([
            'nombre' => $datos['ciudades']['nombre']
        ]);
    }

}
