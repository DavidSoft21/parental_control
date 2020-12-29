@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">PERSONA</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="{{ route('personas.create') }}" class="btn btn-primary">Crear</a>
                <br>
                <br>
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NÚMERDO DOCUMENTO</th>
                            <th>PRIMER NOMBRE</th>
                            <th>SEGUNDO NOMBRE</th>
                            <th>PRIMER APELLIDO</th>
                            <th>SEGUNDO APELLIDO</th>
                            <th>CIUDAD</th>
                            <th>DIRECCIÓN</th>
                            <th>SEXO</th>
                        </tr>
                    </thead>
                    @foreach($personas as $persona)
                    <tr>
                        <td>{{$persona->id}}</td>
                        <td>{{$persona->numero_documento}}</td>
                        <td>{{$persona->primer_nombre}}</td>
                        <td>{{$persona->segundo_nombre}}</td>
                        <td>{{$persona->primer_apellido}}</td>
                        <td>{{$persona->segundo_apellido}}</td>
                        <td>{{$persona->ciudad->nombre}}</td>
                        <td>{{$persona->direccion}}</td>
                        <td>{{$persona->sexo}}</td>
                        <td colspan="3">
                            <div class="btn-group btn-md" role="group">
                                <a href="{{ route('personas.edit', $persona->id)}}">
                                    <button class="btn btn-primary" style="width:80px ">Editar</button>
                                </a>
                                
                                <form method="POST" role="form" action=" {{ route('personas.destroy', $persona->id) }} " enctype="multipart/form-data">
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
<script src="{{ asset('/js/persona.js') }}"></script>
@endpush