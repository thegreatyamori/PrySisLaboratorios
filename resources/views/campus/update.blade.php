@extends('app')
@section('content')
@include ('shared.navbar')

<div class="jumbotron">
    <h2>Actualizar Campus</h2>
</div>
<div class="container">
    <form action="{{url('/campus/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="CAM_CODIGO" value="{{ $campus->CAM_CODIGO }}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAM_NOMBRE">Nombre</label>
                    <input type="input" class="form-control" id="CAM_NOMBRE" name="CAM_NOMBRE" placeholder="Nombre del campus" value="{{ $campus->CAM_NOMBRE }}" required>
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('carrera')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection