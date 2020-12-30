@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">HIJOS</h3>
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
                    @foreach($hijos as $hijo)
                    <tr>
                        <td>{{$hijo->id}}</td>
                        <td>{{$hijo->numero_documento}}</td>
                        <td>{{$hijo->primer_nombre}}</td>
                        <td>{{$hijo->segundo_nombre}}</td>
                        <td>{{$hijo->primer_apellido}}</td>
                        <td>{{$hijo->segundo_apellido}}</td>
                        <td>{{$hijo->ciudad->nombre}}</td>
                        <td>{{$hijo->direccion}}</td>
                        <td>{{$hijo->sexo}}</td>
                        <td colspan="3">
                            <div class="btn-group btn-md" role="group">
                                <a href="{{ route('personas.edit', $hijo->id)}}">
                                    <button class="btn btn-primary" style="width:80px ">Editar</button>
                                </a>
                                
                                <form method="POST" role="form" action=" {{ route('personas.destroy', $hijo->id) }} " enctype="multipart/form-data">
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