@extends('layouts.home')
@section('content')
{{-- @section('title', 'Realizar pedido') --}}

<div class="container">
  <br>
  <br>
  <br>
  @php
  
  $idsolicitudC = DB::table('solicitudes')->where('id_adoptante', Auth::user()->id)->where('estatus', 0)->first();

  @endphp

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="text-left"><i class="fa-solid fa-paw"></i> Carrito #
            @if ($idsolicitudC)
            {{$idsolicitudC->id}}
            @endif
            </h2>
        </div>
        <div class="col" style="text-align: right;">
                @if (count($sperros))
                <a href="{{route('solicitud_adopcion')}}" class="btn btn-warning btn-lg fw-bolder">
                     Solicitar adopción <i class="fa-solid fa-dog"></i>
                </a>
                @else
                
                @endif
        </div>
    </div>
</div>

    <div style="height: 12vh;">
        
    </div>
    
    <div class="row">

        @foreach ($sperros as $sperro)
        @php
        $perro = DB::table('perros')->where('id', $sperro->id_perro)->first();
        $foto = DB::table('detalleperro')->where('id_perro', $perro->id)->first();
        @endphp
        <div class="col col-lg-3">
           
                <div class="card cards shadow">
                    <img src="{{ url('getfile/' .$foto->foto_url )}}" style="margin: 1rem; width: auto; height: 240px;" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 style="font-weight: 700;" class="card-title">{{$perro->nombre}}</h5>
                      <p class="card-text text-truncate">
                        @if ($perro->sexo == 1)
                            Hembra ,
                        @else
                            Macho ,
                        @endif
                        {{$perro->raza}} <br>
                        Edad: {{$perro->edad}} años
                      </p>
                      <div class="d-grid gap-2">
                        <a href="{{route('verperro',$perro->id)}}" target="__blank" class="btn btn-outline-primary">Ver perro</a>
                        <a href="{{route('eliminarPerroCarrito', $sperro->id)}}" class="btn btn-danger"><i class="fa-solid fa-x"></i></a>
                      </div>
                    </div>
                </div>
            
            <br>
        </div>
        @endforeach

    </div>
    @if (!count($sperros))
      <h5 style="color: #545454;" class="text-center">Hmmm, no encontramos ningún perro en tu carrito.</h5>
      <div style="height: 45vh;"></div>
      <div class="text-center">
        <img style="max-width: 300px;" src="{{asset('img/nena.png')}}" alt="">
      </div>
    @endif

    
</div>
@endsection