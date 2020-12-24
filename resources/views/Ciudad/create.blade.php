@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">ALQUILAR PELICULA</h3>
            </div>
            <!-- /.box-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Resuelve los errores</p>    
                </div><br/>
            @endif 
            <!-- form start -->
            <form method="post" role="form" action=" {{ route('alquiler.store') }} " enctype="multipart/form-data">
                <div class="box-body">
                    @csrf


                    @include('alquiler._fields')

                    
                    <div class="col-md-16">
                        <div class="pull-right">
                            <a href="{{ route('alquiler.index') }}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
            </form>
        </div>
        <!-- /.box -->
    </div>
    <div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">EJEMPLARES PELICULA</h3>
            </div>
            <!-- /.box-header -->

            <table id="table_ejemplares" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITULO</th>
                            <th>PRODUCTORA</th>
                            <th>DIRECTOR</th>
                        </tr>
                    </thead>
                </table>

            <!-- crear tabla aqui -->
            
        </div>
        <!-- /.box -->
    </div>
</div>
</div>


@endsection

@push('scripts')
    <script src="{{ asset('/js/alquiler.js') }}"></script>
@endpush