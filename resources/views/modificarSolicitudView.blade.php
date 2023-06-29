@extends('layouts.home')
@section('content')
{{-- @section('title', 'Realizar pedido') --}}
@php
$gos = "Gos d'Atura Catalá";
// $perro = DB::table('perros')->where('id', $solicitud->perro_id)->first();
$detalle = DB::table('detallesolicitud')->where('solicitud_id', $solicitud->id)->first();        
@endphp
<div class="container">
    <br>
    <br>
    <br>
  
    <div class="shadow card container" style="border-radius: 1rem;">
        <br>
        <br>
        <h1>
            Solicitud: #{{$solicitud->id}}
        </h1>
        <br>
        <div style="min-height: 70px; margin-top: 13px;">
            @if (Session::has('mensaje'))
            <div class="alert alert-success  alert-dismissible fade show" role="alert">
                 Se modifico con exito.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
        </div>
        <br>
        {{--  --}}

        <form action="{{route('guardarModificarSolicitud')}}" method="POST">
            <input type="hidden" name="id" value="{{$detalle->id}}">
            <input type="hidden" name="solicitud_id" value="{{$solicitud->id}}">

            @csrf
            <p>	¿Te gustaría cuidar un perro con necesidades especiales?	</p>
            <select required class="form-select" name="P1">
                <option value="{{old('P1')}}@if(!old('P1')){{$detalle->P1}}@endif">
                    @if($detalle->P1 == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	Describe todas las personas que viven en la casa (incluye niños)	</p>
            <textarea required class="form-control" rows="10" name="P2">{{old('P2')}}@if(!old('P2')){{$detalle->P2}}@endif</textarea>
            <br>
            <p>	¿Tienes mascota? (Describe cuantas y su especie)	</p>
            <textarea required class="form-control" rows="10" name="P3">{{old('P3')}}@if(!old('P3')){{$detalle->P3}}@endif</textarea>
            <br>
            <p>	Describe tu casa	</p>
            <textarea required class="form-control" rows="10" name="P4">{{old('P4')}}@if(!old('P4')){{$detalle->P4}}@endif</textarea>
            <br>
            <p>	Explica un día típico en tu casa	</p>
            <textarea required class="form-control" rows="10" name="P5">{{old('P5')}}@if(!old('P5')){{$detalle->P5}}@endif</textarea>
            <br>
            <p>	Explica un día típico en tu fin de semana	</p>
            <textarea required class="form-control" rows="10" name="P6">{{old('P6')}}@if(!old('P6')){{$detalle->P6}}@endif</textarea>
            <br>
            <p>	Cuantas horas al día le puedes dedicar a tu perro al día	</p>
            <select required class="form-select" name="P7">
                
                <option selected value="{{old('P7')}}@if(!old('P7')){{$detalle->P7}}@endif">{{old('P7')}}@if(!old('P7')){{$detalle->P7}}@endif</option>
                
                <option value="1">1	</option>
                <option value="2">2	</option>
                <option value="3">3	</option>
                <option value="4">4	</option>
                <option value="5">5	</option>
                <option value="6">6	</option>
                <option value="7">7	</option>
                <option value="8">8	</option>
                <option value="9">9	</option>
                <option value="10">10	</option>
                <option value="11">11	</option>
                <option value="12">12	</option>
            </select>
            <br>
            <p>	¿Realizaran ejercicio con el perro?	</p>
            <select required class="form-select" name="P8">
                <option value="{{old('P8')}}@if(!old('P8')){{$detalle->P8}}@endif">
                    @if($detalle->P8 == 1)
                    No
                    @else
                    Si
                    @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Qué tipo de ejercicio?	</p>
            <textarea required class="form-control" rows="10" name="P9">{{old('P9')}}@if(!old('P9')){{$detalle->P9}}@endif</textarea>
            <br>
            <p>	Especifica el número de metros cuadrados de la casa	</p>
            <input required type="number" name="P10" class="form-control" value="{{old('P10')}}@if(!old('P10')){{$detalle->P10}}@endif" placeholder="">
            <br>
            <p>	¿Tipo de inmueble?	</p>
            <select required class="form-select" name="P11">
                <option selected value="{{old('P11')}}@if(!old('P11')){{$detalle->P11}}@endif">
                    {{old('P11')}} 
                    @if(!old('P11'))
                    @if($detalle->P11 == 0)
                    Casa
                    @endif
                    @if($detalle->P11 == 1)
                    Departamento
                    @endif
                    @if($detalle->P11 == 2)
                    Condominio / Casa adosada 
                    @endif
                    @endif
                    
                
                </option>
                <option value="0">Casa</option>
                <option value="1">Departamento</option>
                <option value="2">Condominio / Casa adosada</option>
            </select>
            <br>
            <p>	¿Cuántas horas al día va a estar solo el perro?	</p>
            <select required class="form-select" name="P12">
                @if(old('P12'))
                <option selected value="{{old('P12')}}">{{old('P12')}}	</option>
                @endif
                @if(!old('P12'))
                <option selected value="{{$detalle->P12}}">{{$detalle->P12}}	</option>
                @endif
                <option value="1">1	</option>
                <option value="2">2	</option>
                <option value="3">3	</option>
                <option value="4">4	</option>
                <option value="5">5	</option>
                <option value="6">6	</option>
                <option value="7">7	</option>
                <option value="8">8	</option>
                <option value="9">9	</option>
                <option value="10">10 </option>
                <option value="11">11 </option>
                <option value="12">12 </option>
            </select>
            <br>
            <p>	¿Dónde vas a poner al perro cuando estés solo?	</p>
            <select required class="form-select" name="P13">
                @if(old('P13'))
                <option selected value="{{old('P13')}}">{{old('P13')}}	</option>
                @endif
                @if(!old('P13'))
                <option selected value="{{$detalle->P13}}">
                   @if($detalle->P13 == 0)
                   Adentro del hogar
                   @endif
                   @if($detalle->P13 == 1)
                   Al aire libre
                   @endif
                   @if($detalle->P13 == 2)
                   Refugio al aire libre 
                   @endif
                </option>
                @endif
                <option value="0">Adentro del hogar</option>
                <option value="1">Al aire libre</option>
                <option value="2">Refugio al aire libre</option>
            </select>
            <br>
            <p>	¿Tienes un espacio al aire libre en tu casa? </p>
            <select required class="form-select" name="P14">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Donde va a dormir el perro?	</p>
            <textarea class="form-control" required rows="10" name="P15">{{old('P15')}}@if(!old('P15')){{$detalle->P15}}@endif</textarea>
            <br>
            <p>	¿Por qué te interesa adoptar un perro?	</p>
            <textarea class="form-control" required rows="10" name="P16">{{old('P16')}}@if(!old('P16')){{$detalle->P16}}@endif</textarea>
            <br>
            <p>	¿Sabes algo sobre entrenar perros?	</p>
            <textarea class="form-control" required rows="10" name="P17">{{old('P17')}}@if(!old('P17')){{$detalle->P17}}@endif</textarea>
            <br>
            <p>	¿Cuánto persives al mes?	</p>
            <input type="number" name="P18" class="form-control" value="{{old('P18')}}@if(!old('P18')){{$detalle->P18}}@endif" placeholder="">
            <br>
            <p>	Domicilio del veterinario más cerca de tu domicilio	</p>
            <input type="text" name="P19" class="form-control" value="{{old('P19')}}@if(!old('P19')){{$detalle->P19}}@endif" placeholder="">
            <br>
            <p>	Si ocurre una emergencia crees poder llevar a tu perro inmediatamente	</p>
            <select required class="form-select" name="P20">
                
                <option selected value="{{old('P20')}}@if(!old('P20')){{$detalle->P20}}@endif">

                    @if(!old('P20'))
                        @if($detalle->P20 == 1)
                        No
                        @else
                        Si
                        @endif
                    @else
                        @if(old('P20') == 1)
                        No
                        @else
                        Si
                        @endif
                    @endif
                </option>

                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Estas dispuest@ a que alguien de nuestro refugio revise tu casa?	</p>
            <select required class="form-select" name="P21">
                
                <option selected value="{{old('P21')}}@if(!old('21')){{$detalle->P21}}@endif">
                @if(!old('P21'))
                    @if($detalle->P21 == 1)
                    No
                    @else
                    Si
                    @endif
                @else
                    @if(old('P21') == 1)
                    No
                    @else
                    Si
                    @endif
                @endif
                </option>
                
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Estas dispuest@ a que alguien de nuestro refugio tenga una video llamada para mostrar tu casa?	</p>
            <select required class="form-select" name="P22">
                <option selected value="{{old('P22')}}@if(!old('21')){{$detalle->P22}}@endif">
                    @if(!old('P22'))
                        @if($detalle->P22 == 1)
                        No
                        @else
                        Si
                        @endif
                    @else
                        @if(old('P22') == 1)
                        No
                        @else
                        Si
                        @endif
                    @endif
                    </option>
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Todas las personas del hogar están de acuerdo con la adopción del perro?	</p>
            <select required class="form-select" name="P23">
                <option selected value="{{old('P23')}}@if(!old('21')){{$detalle->P23}}@endif">
                    @if(!old('P23'))
                        @if($detalle->P23 == 1)
                        No
                        @else
                        Si
                        @endif
                    @else
                        @if(old('P23') == 1)
                        No
                        @else
                        Si
                        @endif
                    @endif
                    </option>
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Alguien tiene alergia a los perros?	</p>
            <select required class="form-select" name="P24">
                <option selected value="{{old('P24')}}@if(!old('21')){{$detalle->P24}}@endif">
                    @if(!old('P24'))
                        @if($detalle->P24 == 1)
                        No
                        @else
                        Si
                        @endif
                    @else
                        @if(old('P24') == 1)
                        No
                        @else
                        Si
                        @endif
                    @endif
                    </option>
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">Guardar solicitud de adopción</button>
            </div>
        </form>

        {{--  --}}
        <br>
        <br>
    </div>
</div>
@endsection