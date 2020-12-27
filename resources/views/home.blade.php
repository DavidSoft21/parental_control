@extends('plantilla.plantilla')
@section('content')

<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bienvenid@!, {{ Auth::user()->name }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <a href="http://127.0.0.1:8000/home">Home</a>
                <br>
                <br>
                <div class="card bg-dark text-white">
                    <img class="card-img" src="{{ asset('img/PC_RED1.jpeg') }}" alt="Parental Control" style="height:30%;
                    width: 100%;">
                    <div class="card-img-overlay">
                      <h5 class="card-title"></h5>
                      <p class="card-text"></p>
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <!-- /.box-body -->
            
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('/js/alquiler.js') }}"></script>
@endpush
