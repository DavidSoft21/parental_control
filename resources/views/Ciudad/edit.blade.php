@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">CIUDAD</h3>
            </div>
            <!-- /.box-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <p>Resuelve los errores</p> 
                    <ul>
                        @foreach($errors->all() as $error) 
                            <li>{{ $error }}</li>  
                        @endforeach
                    </ul>    
                </div><br/>
            @endif 
            <!-- form start -->
            <form method="post" role="form" action=" {{ route('ciudades.update', $ciudad->id) }} " enctype="multipart/form-data">

                <div class="box-body">
                    @csrf
                    @method('PATCH')


                    @include('Ciudad._fields')


                    <div class="col-md-16">
                        <div class="pull-right">
                            <a href="{{ route('ciudades.index') }}" class="btn btn-danger">Cancelar</a>
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
    <script src="{{ asset('/js/ciudad.js') }}"></script>
@endpush



