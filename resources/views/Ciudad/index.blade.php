@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">ALQUILER</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="/alquiler/create/" class="btn btn-primary">Crear</a>
                <br>
                <br>
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID ALQUILER</th>
                            <th>ID PELICULA</th>
                            <th>TITULO PELICULA</th>
                            <th>PRODUCTORA PELICULA</th>
                            <th>DIRECTOR PELICULA</th>
                            <th>ID CLIENTE</th>
                            <th>DOCUMENTO CLIENTE</th>
                            <th>NOMBRE CLIENTE</th>
                            <th>FECHA INICIO ALQUILER</th>
                            <th>FECHA INICIO ALQUILER</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    @foreach($alquiler as $alq)
                    <tr>
                        <td>{{$alq->id}}</td>
                        <td>{{$alq->pelicula_id}}</td>
                        <td>{{$alq->titulo}}</td>
                        <td>{{$alq->productora}}</td>
                        <td>{{$alq->director}}</td>
                        <td>{{$alq->cliente_id}}</td>
                        <td>{{$alq->identificacion}}</td>
                        <td>{{$alq->p_nombre, $alq->p_apellido}}</td>
                        <td>{{$alq->fecha_inicio}}</td>
                        <td>{{$alq->fecha_fin}}</td>

                        <td>
                            <div class="btn-group btn-md" role="group">
                                <a href="{{ route('alquiler.edit', $alq->id)}}">
                                    <button class="btn btn-primary" style="width:80px">Editar</button>
                                </a>
                                
                                <form method="POST" role="form" action=" {{ route('alquiler.destroy', $alq->id) }} " enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="width:80px">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('/js/alquiler.js') }}"></script>
@endpush