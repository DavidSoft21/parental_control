<!--field ciudad id -->
<div class="form-group col-md-6">
    <label for="{{CITY_FIELD_ID}}">ID</label>
    <input disabled type="text" class="form-control" name="ciudades[id]" id="{{CITY_FIELD_ID}}" placeholder="CIUDAD ID" value="{{old('ciudad.id', isset($ciudad->id)) ? $ciudad->id : ''}}"> 
</div>

<!-- field ciudad nombre -->
<div class="form-group col-md-6">
    <label for="{{CITY_FIELD_NAME}}">NOMBRE</label>
    <input type="text" class="form-control" name="ciudades[nombre]" id="{{CITY_FIELD_NAME}}" placeholder="CIUDAD NOMBRE" value="{{old('ciudad.nombre', isset($ciudad->nombre)) ? $ciudad->nombre : ''}}"> 
</div>

