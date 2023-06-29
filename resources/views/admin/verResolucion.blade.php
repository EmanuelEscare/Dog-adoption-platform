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

    $perros = DB::table('perrosolicitud')->where('id_solicitud', $solicitud->id)->get();
@endphp

    <div class="container">
        <div class="row">
            @component('components.menuAdmin')
            
            @endcomponent
            <div class="col-lg-9">
                <div class="container shadow" style="border-radius: 1rem;">
                    <br>
                    <h1>Resolución de adopción #{{$solicitud->id}}</h1>
                    <br>
                    <br>
                    <br>
<hr>
<br>
                        @foreach ($perros as $perro)
                        @php
                            $info = DB::table('perros')->where('id', $perro->perro_id)->first();
                        @endphp
                            <div class="row">
                                <div class="col-lg-8">
                                    <h2>#{{$info->id}} | <a target="__blank" href="{{route('verperro',$info->id)}}">{{$info->nombre}}</a></h2>
                                </div>
                                <div class="col-lg-4">
                                    @if ($perro->estatus == 1)
                                    <a style="width: -webkit-fill-available;" target="__blank" href="{{route('imprimir', [$solicitud->adoptante_id , $info->id, $solicitud->id])}}" class="btn btn-primary btn-lg">Imprimir certificado</a>
                                    @else
                                    <button style="width: -webkit-fill-available;" type="button" class="btn btn-secondary btn-lg">No disponible</button>
                                    @endif
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                        @endforeach

                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
@endsection