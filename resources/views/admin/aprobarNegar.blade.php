@extends('layouts.home')
@section('content')
@php

    function calculaedad($fechanacimiento){
        list($ano,$mes,$dia) = explode("-",$fechanacimiento);
        $ano_diferencia  = date("Y") - $ano;
        $mes_diferencia = date("m") - $mes;
        $dia_diferencia   = date("d") - $dia;
        if ($dia_diferencia < 0 || $mes_diferencia < 0)
            $ano_diferencia--;
        return $ano_diferencia;
    }
    $respuesta = DB::table('detallesolicitud')->where('solicitud_id', $solicitud->id)->first();
    // dd($respuesta);
@endphp

    <div class="container">
        <div class="row">
            @component('components.menuAdmin')
            
            @endcomponent
            <div class="col-lg-9">
                <div class="container shadow" style="border-radius: 1rem;">
                    <br>
                    <h1>Aprobar / Negar - Solicitud de adopción</h1>
                    <br>
                    <br>
                    <div style="border-radius: 1rem; background: rgb(211, 211, 211);" class="container">
                    <br>
                    <h2>Adoptante: {{$usuario->nombre}}</h2>
                    <br>
                    <div class="row">
                        <div class="col col-lg-6"><i class="fa-solid fa-envelope"></i> Email: {{$usuario->email}}<br><br></div>
                        <div class="col col-lg-6"><i class="fa-solid fa-phone"></i> Teléfono: {{$usuario->telefono}}<br><br></div>
                        <div class="col col-lg-6">
                            <i class="fa-solid fa-cake-candles"></i> Edad: 
                            {{calculaedad ($usuario->fecha_nac)}} años
                            <br><br></div>
                        <div class="col col-lg-12">
                            <p><i class="fa-solid fa-house"></i> Domicilio:</p>
                            <p style="white-space: pre; white-space: pre-wrap;">{{$usuario->direccion}} CP: {{$usuario->codigo}}</p>
                        </div>
                    </div>
                    <br>
                    <br>
                    </div>



                    <br>




                    <br>
                    <div style="border-radius: 1rem; background: rgb(211, 211, 211);" class="container">
                    <br>
                    <h2>Respuestas</h2>
                    <br>
                    <p style="color: #252525; font-weight: 600;">	¿Te gustaría cuidar un perro con necesidades especiales?	</p>
                    <p>
                        @if($respuesta->P1 == 0)
                            Si
                        @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	Describe todas las personas que viven en la casa (incluye niños)	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P2}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Tienes mascota? (Describe cuantas y su especie)	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P3}}</p>
                    <p style="color: #252525; font-weight: 600;">	Describe tu casa	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P4}}</p>
                    <p style="color: #252525; font-weight: 600;">	Explica un día típico en tu casa	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P5}}</p>
                    <p style="color: #252525; font-weight: 600;">	Explica un día típico en tu fin de semana	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P6}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Cuantas horas al día le puedes dedicar a tu perro al día?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P7}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Realizaran ejercicio con el perro?	</p>
                    <p>
                    @if($respuesta->P8 == 0)
                        Si
                    @else 
                        No
                    @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Qué tipo de ejercicio?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P9}}</p>
                    <p style="color: #252525; font-weight: 600;">	Especifica los metros cuadrados de la casa	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P10}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Tipo de inmueble?	</p>
                    <p>
                    @if ($respuesta->P11 == 0)
                        Casa
                    @endif
                    @if ($respuesta->P11 == 1)
                        Departamento
                    @endif
                    @if ($respuesta->P11 == 2)
                        Condominio / Casa adosada
                    @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Cuántas horas al día va a estar solo el perro?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P12}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Dónde vas a poner al perro cuando estés solo?	</p>
                    <p>
                        @if ($respuesta->P13 == 0)
                        Adentro del hogar
                    @endif
                    @if ($respuesta->P13 == 1)
                        Al aire libre
                    @endif
                    @if ($respuesta->P13 == 2)
                        Refugio al aire libre
                    @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Tienes un espacio al aire libre en tu casa?	</p>
                    <p>
                        @if($respuesta->P14 == 0)
                            Si
                        @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Donde va a dormir el perro?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P15}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Por qué te interesa adoptar un perro?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P16}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Sabes algo sobre entrenar perros?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P17}}</p>
                    <p style="color: #252525; font-weight: 600;">	¿Cuánto persives al mes?	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{number_format($respuesta->P18)}} mxn</p>
                    <p style="color: #252525; font-weight: 600;">	Domicilio del veterinario más cerca de tu domicilio	</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$respuesta->P19}}</p>
                    <p style="color: #252525; font-weight: 600;">	Si ocurre una emergencia crees poder llevar a tu perro inmediatamente	</p>
                    <p>
                        @if($respuesta->P20 == 0)
                            Si
                         @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Estas dispuest@ a que alguien de nuestro refugio checar tu casa?	</p>
                    <p>
                        @if($respuesta->P21 == 0)
                            Si
                         @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Estas dispuest@ a que alguien de nuestro refugio tenga una video llamada para mostrar tu casa?	</p>
                    <p>
                        @if($respuesta->P22 == 0)
                            Si
                         @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Todas las personas del hogar están de acuerdo con la adopción del perro?	</p>
                    <p>
                        @if($respuesta->P23 == 0)
                            Si
                         @else 
                            No
                        @endif
                    </p>
                    <p style="color: #252525; font-weight: 600;">	¿Alguien tiene alergia a los perros?	</p>
                    <p>
                        @if($respuesta->P24 == 0)
                            Si
                         @else 
                            No
                        @endif
                    </p>
                    
                    <br>
                    </div>
<br><br>
<div style="border-radius: 1rem; background: #00bfe4;" class="container">
    <form action="{{route('guardarResolucion')}}" method="post">
    <br>
    @csrf
    <h2 style="color: white;">Perros: </h2>
    <br>
    @php
        $perros = DB::table('perrosolicitud')->where('id_solicitud', $solicitud->id)->get();
        $contador = 0;
    @endphp
    @foreach ($perros as $perro)
        @php
            $info = DB::table('perros')->where('id', $perro->perro_id)->first();
            $contador = $contador+1;
        @endphp
        <a style="font-size: 1.5rem;" class="link-light" href="{{route('verperro',$info->id)}}" target="_blank">{{$info->nombre }} #{{$info->id}}</a>
        <br>
        <br>
        <input type="hidden" name="perroId{{$contador}}" value="{{$perro->id}}">

        @if (DB::table('perros')->where('id', $info->id)->where('disponibilidad', 1)->first())
        {{-- <input type="hidden" name="perroId{{$contador}}" value="1"> --}}
        <input value="0" type="hidden" name="perro{{$contador}}">
        <p>Perro no disponible</p>
        @else
        <div class="form-check">
            <input class="form-check-input" value="1" type="radio" name="perro{{$contador}}" checked id="perro1{{$contador}}">
            <label class="form-check-label" for="perro1{{$contador}}">
              Aprobar
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" value="0" type="radio" name="perro{{$contador}}" id="perro2{{$contador}}">
            <label class="form-check-label" for="perro2{{$contador}}">
              Negar
            </label>
        </div>
        @endif


        <hr>
        <br>
    @endforeach
    <input type="hidden" name="registro" value="{{$contador}}">
    <br>
    


    <button style="width: -webkit-fill-available;" class="btn btn-primary btn-lg" type="submit">Guardar resolución </button>
    <br>
    <br>
</form>
    </div>

                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection