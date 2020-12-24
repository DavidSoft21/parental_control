@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">EDITAR ALQUILER</h3>
            </div>
            <!-- /.box-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Resuelve los errores</p>    
                </div><br/>
            @endif 
            <!-- form start -->
            <form method="post" role="form" action=" {{ route('alquiler.update', $categorias->id) }} " enctype="multipart/form-data">

                <div class="box-body">
                    @csrf
                    @method('PATCH')


                    @include('alquiler._fields')


                    <div class="col-md-16">
                        <div class="pull-right">
                            <a href="{{ route('alquiler.index') }}" class="btn btn-danger">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Editar</button>
                        </div>
                    </div>
                <!-- /.box-body -->
            </form>
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@push('scripts')
    <script src="{{ asset('/js/alquiler.js') }}"></script>
@endpush



