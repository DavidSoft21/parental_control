<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use carbon\Carbon;
use App\Ciudad;
use App\Persona;
class PersonaActualizarRequest extends FormRequest
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
            'personas.id'=>'',
            'personas.numero_documento'=>'required',
            'personas.primer_nombre'=>'required',
            'personas.segundo_nombre'=>'',
            'personas.primer_apellido'=>'required',
            'personas.segundo_apellido'=>'required',
            'personas.direccion'=>'required',
            'personas.celular'=>'required',
            'personas.fecha_nacimiento'=>'required',
            'personas.ciudad_id'=>'required',
            'personas.padre_id'=>'',
            'personas.madre_id'=>'',
            'personas.sexo'=>'required'
        ];
    }

    public function messages(){
        return [

            'numero_documento.required'=>'Añade un número de documento',
            'primer_nombre.required'=>'Añade un nombre',
            'primer_apellido.required'=>'Añade un apellido 1',
            'segundo_apellido.required'=>'Añade un apellido 2',
            'direccion.required'=>'Añade una direccion',
            'celular.required'=>'Añade un celular',
            'fecha_nacimiento.required'=>'Añade una fecha de nacimiento',
            'ciudad_id.required'=>'Añade una ciudad',
            'sexo.required'=>'Añade sexo'
        ];
    }

    public function actualizarPersona(Persona $persona)
    {
        $datos = $this->validated();
        $persona->update($datos['personas']);
    }
}
