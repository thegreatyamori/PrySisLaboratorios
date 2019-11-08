@extends('app')
@section('content')

<div class="container-fluid">
    <h2>Evento ocacional </h2>
    <div class="row">
        <div class="col">
            <form action="{{url('/reporte/ocasionales')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="card border-primary mb-3">
                    <div class="card-header text-primary">Consultar</div>
                    <div class="card-body text-primary">
                    <select class="form-control" id="PER_CODIGO" name="PER_CODIGO"  >
                    @foreach ($periodos as $per)
                      @if($per->PER_CODIGO==$periodoActual)
                        <option value="{{$per->PER_CODIGO}}" selected="{{$per->PER_CODIGO}}">{{$per->PER_NOMBRE}}</option>
                      @else
                      <option value="{{$per->PER_CODIGO}}"  >{{$per->PER_NOMBRE}}</option>
                      @endif
                    @endforeach
                  </select> 
                       
                    </div>
                    <div class="card-body text-primary">
                    <button type="submit" class="btn btn-primary"><span class="oi oi-magnifying-glass"></span> Consultar</button>
                  
                    </div>
                    
                </div>
            </form>
        </div>
        <div class="col">
            <div class="card border-info mb-3">
                <div class="card-header text-info">Opciones</div>
                <div class="card-body text-info">
                    <form>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h5 class="card-title">Descargar</h5>
                        
                        
                    </form>
                    <br>    
                    @if (isset($data))
                      <button onclick="exportEventoOcasional()" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar a PDF</button>
                    @else
                       <button disabled onclick="exportEventoOcasional()" class="btn btn-info"><span class="oi oi-cloud-download"></span> Exportar a PDF</button>
                    @endif
                    <br>  <br>  
                </div>
            </div>
        </div>
    </div>

      @if (session('title') && session('subtitle'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <h4 class="alert-heading">{{ session('title') }}</h4>
        <p>{{ session('subtitle') }}</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


         <span class="counter pull-right"></span>
    <p id="sala">
       <span class="h4">REPORTE: ;
            <span style="font-weight: 300;">EVENTO OCASIONAL</span>
        </span>
        <br>
        <span class="h6" style="margin-right:150px;">PERIODO;
        @if (isset($periodos[$periodoActual]))
            <span style="font-weight: 300;">{{ $periodos[$periodoActual]->PER_NOMBRE }}</span>
        @endif
        </span>>
      
    </p>     
    <table id="ListTable" class="table table-hover table-bordered results">
    <thead>
            <tr>
                <th scope="row">ID</th>
                <th scope="row">SALA</th>
                <th scope="row">MATERIA</th>
                <th scope="row">DOCENTE</th>
                <th scope="row">DIA</th>
                <th scope="row">HORA ENTRADA</th>
                <th scope="row">HORA SALIDA </th>
                <th scope="row">NUMERO HORAS </th>
                <th scope="row">NOTA </th>
            </tr>
        </thead>
        <tbody>
        @if (isset($data))
                @foreach ($data as $eve)
                    
                    <tr>
                        <td scope="row">{{$eve-> CON_CODIGO}}</td>
                        <td scope="row">{{$eve -> LAB_NOMBRE}}</td>
                        <td scope="row">{{$eve -> MAT_NOMBRE}}</td>
                        <td scope="row">{{$eve -> DOC_NOMBRE}}</td>
                        <td scope="row">{{$eve -> CON_DIA }}</td>
                        <td scope="row">{{$eve -> CON_HORA_ENTRADA}}</td>
                        <td scope="row">{{$eve -> CON_HORA_SALIDA}}</td>
                        <td scope="row">{{$eve -> CON_NUMERO_HORAS}}</td>
                        <td scope="row">{{$eve-> CON_NOTA}}</td>
                    </tr>
                    
                @endforeach     
        @endif        
        </tbody> 
         </tbody>   
        </tbody> 
</table>


</div>

@endsection