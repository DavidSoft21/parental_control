<!--field persona id -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_ID}}">ID</label>
    <input disabled type="text" class="form-control" name="personas[id]" id="{{PERSON_FIELD_ID}}" placeholder="ID PERSONA" value="{{old('persona.id', isset($persona->id)) ? $persona->id : ''}}"> 
</div>

<!-- field persona numero documento -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_DOCUMENT_NUMBER}}">NÚMERO DOCUMENTO</label>
    <input type="text" class="form-control" name="personas[numero_documento]" id="{{PERSON_FIELD_DOCUMENT_NUMBER}}" placeholder="NÚMERO DOCUMENTO" value="{{old('persona.numero_documento', isset($persona->numero_documento)) ? $persona->numero_documento : ''}}"> 
</div>

<!-- field persona primer nombre -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_FIRST_NAME}}">PRIMER NOMBRE</label>
    <input type="text" class="form-control" name="personas[primer_nombre]" id="{{PERSON_FIELD_FIRST_NAME}}" placeholder="PRIMER NOMBRE" value="{{old('persona.primer_nombre', isset($persona->primer_nombre)) ? $persona->primer_nombre : ''}}"> 
</div>

<!-- field persona segundo nombre -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_SECOND_NAME}}">SEGUNDO NOMBRE</label>
    <input type="text" class="form-control" name="personas[segundo_nombre]" id="{{PERSON_FIELD_SECOND_NAME}}" placeholder="SEGUNDO NOMBRE" value="{{old('persona.segundo_nombre', isset($persona->segundo_nombre)) ? $persona->segundo_nombre : ''}}"> 
</div>

<!-- field persona primer apellido -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_FIRST_SURNAME}}">PRIMER APELLIDO</label>
    <input type="text" class="form-control" name="personas[primer_apellido]" id="{{PERSON_FIELD_FIRST_SURNAME}}" placeholder="PRIMER APELLIDO" value="{{old('persona.primer_apellido', isset($persona->primer_apellido)) ? $persona->primer_apellido : ''}}"> 
</div>

<!-- field persona segundo apellido -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_SECOND_SURNAME}}">SEGUNDO APELLIDO</label>
    <input type="text" class="form-control" name="personas[segundo_apellido]" id="{{PERSON_FIELD_SECOND_SURNAME}}" placeholder="SEGUNDO APELLIDO" value="{{old('persona.segundo_apellido', isset($persona->segundo_apellido)) ? $persona->segundo_apellido : ''}}"> 
</div>

<!-- field persona direccion -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_DIRECTION}}">DIRECCION</label>
    <input type="text" class="form-control" name="personas[direccion]" id="{{PERSON_FIELD_DIRECTION}}" placeholder="DIRECCION" value="{{old('persona.direccion', isset($persona->direccion)) ? $persona->direccion: ''}}"> 
</div>

<!-- field persona celular -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_CELL_PHONE}}">CELULAR</label>
    <input type="text" class="form-control" name="personas[celular]" id="{{PERSON_FIELD_CELL_PHONE}}" placeholder="CELULAR" value="{{old('persona.celular', isset($persona->celular)) ? $persona->celular : ''}}"> 
</div>

<!--field  fecha nacimiento -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_BIRTHDATE}}">FECHA NACIMIENTO</label>
    <input type="date" class="form-control" name="personas[fecha_nacimiento]" id="{{PERSON_FIELD_BIRTHDATE}}" value="{{old('persona.fecha_nacimiento', isset($persona->fecha_nacimiento) ? $persona->fecha_nacimiento : '')}}">
</div>

<!--field ciudad -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_CITY_ID}}">CIUDAD</label>
    <select class="form-control select2" name="personas[ciudad_id]" id="{{PERSON_FIELD_CITY_ID}}">
    <option value="">Seleccionar...</option>
        @foreach ($ciudades as $ciudad)
        <option value="{{ $ciudad->id }}" {{old('persona.ciudad_id', isset($persona->ciudad_id) ? $persona->ciudad_id : '') == $ciudad->id ? ' selected' : '' }}> {{ $ciudad->nombre}} </option>
        @endforeach
    </select>
</div>

<!--field madre -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_MOTHER_ID}}">MADRE</label>
    <select class="form-control select2" name="personas[madre_id]" id="{{PERSON_FIELD_MOTHER_ID}}">
    
        @foreach ($madres as $madre)
            @if($loop->first)
                <option value="">Seleccionar...</option>
            @else
                <option value="{{ $madre->id }}" {{old('persona.madre_id', isset($madre->id) ? $madre->id : '') == isset($persona->madre_id) ? ' selected' : '' }}> {{ $madre->id }} - {{ $madre->primer_nombre}} , {{ $madre->primer_apellido}} </option>
            @endif
        @endforeach
    </select>
</div>

<!--field padre -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_FATHER_ID}}">PADRE</label>
    <select class="form-control select2" name="personas[padre_id]" id="{{PERSON_FIELD_FATHER_ID}}">
    <option value="">Seleccionar...</option>
        @foreach ($padres as $padre)
            <option value="{{ $padre->id }}" {{old('persona.padre_id', isset($padre->id) ? $padre->id : '') == isset($persona->padre_id) ? ' selected' : '' }}> {{ $padre->id }} - {{ $padre->primer_nombre}} , {{ $padre->primer_apellido}} </option>
        @endforeach
    </select>
</div>

<!--field sexo -->
<div class="form-group col-md-6">
    <label for="{{PERSON_FIELD_SEX}}">GENERO</label><br>
    @foreach ($generos as $key => $genero)<br>
        <label><input type="radio" id="{{PERSON_FIELD_SEX}}" name="personas[sexo]" value="{{ $key }}" {{old('persona.sexo', isset($persona->sexo) ? $persona->sexo : '' ) == $key ? ' checked' : '' }}>{{ $genero }}
    @endforeach
</div>






