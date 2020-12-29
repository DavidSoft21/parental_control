PERSON_FIELD_ID id
PERSON_FIELD_DOCUMENT_NUMBER numero_documento
PERSON_FIELD_FIRST_NAME primer_nombre
PERSON_FIELD_SECOND_NAME segundo_nombre
PERSON_FIELD_FIRST_SURNAME primer_apellido
PERSON_FIELD_SECOND_SURNAME segundo_apellido
PERSON_FIELD_DIRECTION direccion
PERSON_FIELD_CELL_PHONE celular
PERSON_FIELD_BIRTHDATE fecha_nacimiento
PERSON_FIELD_CITY_ID ciudad_id
PERSON_FIELD_FATHER_ID padre_id
PERSON_FIELD_MOTHER_ID madre_id
PERSON_FIELD_SEX sexo

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