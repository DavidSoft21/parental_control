@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">CIUDAD</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="{{ route('ciudades.create') }}" class="btn btn-primary">Crear</a>
                <br>
                <br>
                <table id="table" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>CREADO</th>
                            <th>EDITADO</th>
                        </tr>
                    </thead>
                    @foreach($ciudades as $ciudad)
                    <tr>
                        <td>{{$ciudad->id}}</td>
                        <td>{{$ciudad->nombre}}</td>
                        <td>{{$ciudad->created_at}}</td>
                        <td>{{$ciudad->updated_at}}</td>
                        <td colspan="3">
                            <div class="btn-group btn-md" role="group">
                                <a href="{{ route('ciudades.edit', $ciudad->id)}}">
                                    <button class="btn btn-primary" style="width:80px ">Editar</button>
                                </a>
                                
                                <form method="POST" role="form" action=" {{ route('ciudades.destroy', $ciudad->id) }} " enctype="multipart/form-data">
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
<script src="{{ asset('/js/ciudad.js') }}"></script>
@endpush