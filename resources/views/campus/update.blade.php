<!--
 * Sistema de Gestion de Laboratorios - ESPE
 *
 * Author: Barrera Erick - LLamuca Andrea
 * Revisado por: 
 *
-->
@extends('app')
@section('content')
@include('shared.title', array('titulo' => 'Actualizar Campus'))

<div class="container-fluid">
    @if(isset($mensajes))
        <div class="alert alert-warning">
            {{ $mensajes }}
        </div>
    @endif   
    <p><h5>Los campos con <span style="color:#FF0000";>*</span> son obligatorios</h5></p>
    <form action="{{url('/campus/update')}}" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="CAM_CODIGO" value="{{$campus->CAM_CODIGO}}">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="CAM_NOMBRE">Nombre</label>
                    @if(isset($CAM_NOMBRE))
                        <input type="text" class="form-control" id="CAM_NOMBRE" name="CAM_NOMBRE" value="{{$CAM_NOMBRE}}" required>
                    @else  
                        <input type="text" class="form-control" id="CAM_NOMBRE" name="CAM_NOMBRE" value="{{$campus->CAM_NOMBRE}}" placeholder="Nombre del campus" required>
                    @endif
                </div>
            </div>
        </div>
        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mb-2">Actualizar</button>
        <a href="{{url('campus')}}" class="btn btn-danger mb-2">Cancelar</a>
    </form>
</div>
@endsection