<!--field pelicula id -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_RENTAL_ID_MOVIE}}">ID</label>
    <select class="form-control select2" name="alquiler[id]" id="{{MOVIE_RENTAL_ID_MOVIE}}">
    <option value="">Seleccionar...</option>
        @foreach ($peliculas as $pelicula)
        <option value="{{ $pelicula->pelicula_id }}" {{old(MOVIE_RENTAL_ID_MOVIE, isset($alquiler->pelicula_id) ? $alquiler->pelicula_id : '') == $pelicula->id ? ' selected' : '' }}> {{ $pelicula->titulo}} </option>
        @endforeach
    </select>
</div>

<!-- field id pelicula -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_RENTAL_ID_MOVIE}}">ID PELICULA</label>
    <input type="text" class="form-control" name="alquiler[pelicula_id]" id="{{MOVIE_RENTAL_ID_MOVIE}}" placeholder="pelicula id" value="{{old('alquiler_pelicula.pelicula_id', isset($alquiler->pelicula_id)) ? $alquiler->pelicula_id : ''}}"> 
</div>

<!-- field titulo pelicula -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_TITLE}}">TITULO PELICULA</label>
    <input type="text" class="form-control" name="peliculas[titulo]" id="{{MOVIE_TITLE}}" placeholder="titulo" value="{{old('pelicula.titulo', isset($peliculas->titulo)) ? $peliculas->titulo : ''}}"> 
</div>

<!--field id cliente -->
<div class="form-group col-md-6">
    <label for="{{CLIENT_ID}}">ID CLIENTE</label>
    <input type="text" class="form-control" name="clientes[id]" id="{{CLIENT_ID}}" placeholder="cliente id" value="{{old('cliente.id', isset($clientes->id)) ? $clientes->id : ''}}">
</div>

<!--field nombre cliente -->
<div class="form-group col-md-6">
    <label for="{{CLIENT_FIRST_NAME}}">NOMBRE CLIENTE</label>
    <input type="text" class="form-control" name="clientes[p_nombre]" id="{{CLIENT_FIRST_NAME}}" placeholder="nombre cliente" value="{{old('pelicula.p_nombre', isset($peliculas->p_nombre)) ? $peliculas->p_nombre : ''}}">
</div>

<!--field productora -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_PRODUCER}}">PRODUCTORA PELICULA</label>
    <input type="text" class="form-control" name="peliculas[productora]" id="{{MOVIE_PRODUCER}}" placeholder="productora" value="{{old('pelicula.productora', isset($peliculas->productora)) ? $peliculas->productora : ''}}">
</div>

<!--field  director -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_DIRECTOR}}">DIRECTOR PELICULA</label>
    <input type="text" class="form-control" name="peliculas[director]" id="{{MOVIE_DIRECTOR}}" placeholder="director" value="{{old('pelicula.director', isset($peliculas->director)) ? $peliculas->director : ''}}">
</div>

<!--field  fecha inicio -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_RENTAL_START_DATE}}">FECHA INICIO ALQUILER</label>
    <input type="text" class="form-control" name="alquiler[fecha_inicio]" id="{{MOVIE_RENTAL_START_DATE}}" placeholder="AAAA-MM-DD" value="{{old('alquiler_pelicula.fecha_inicio', isset($alquiler->fecha_inicio)) ? $alquiler->fecha_inicio : ''}}">
</div>

<!--field  fecha fin -->
<div class="form-group col-md-6">
    <label for="{{MOVIE_RENTAL_END_DATE}}">FECHA FIN ALQUILER</label>
    <input type="text" class="form-control" name="alquiler[fecha_fin]" id="{{MOVIE_RENTAL_END_DATE}}" placeholder="AAAA-MM-DD" value="{{old('alquiler_pelicula.fecha_fin', isset($alquiler->fecha_fin)) ? $alquiler->fecha_fin : ''}}">
</div>
<hr>
<!-- tab-pane -->
<div class="tab-pane" id="tab_8">
    <div class="box-body">
        @include('cliente._fields')
    </div>
</div>
<!-- /.tab-pane -->


