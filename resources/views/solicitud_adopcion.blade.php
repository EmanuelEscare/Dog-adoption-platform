@extends('layouts.home')
@section('content')

    <style>
        
body{
    background-color: #fabc51;
}
    </style>

  <br>
  <br>
  <br>
<div class="container">
  <br><br>
  <div class="card shadow" style="border-radius: 1rem;">
    <br>
    <div class="container">
        <br>
        <h1><i class="fa-solid fa-paw"></i> Solicitud de adopción.</h1>
        <br>
        <p>Llena atentamente los campos solicitados.
            <br>

        </p>
        <br>
        <hr>
        <br>
        <form action="{{route('solicitudAdopcion')}}" method="POST">
            
            @csrf
            <p>	¿Te gustaría cuidar un perro con necesidades especiales?	</p>
            <select required class="form-select" name="P1">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	Describe todas las personas que viven en la casa (incluye niños)	</p>
            <textarea required class="form-control" rows="10" name="P2"></textarea>
            <br>
            <p>	¿Tienes mascota? (Describe cuantas y su especie)	</p>
            <textarea required class="form-control" rows="10" name="P3"></textarea>
            <br>
            <p>	Describe tu casa	</p>
            <textarea required class="form-control" rows="10" name="P4"></textarea>
            <br>
            <p>	Explica un día típico en tu casa	</p>
            <textarea required class="form-control" rows="10" name="P5"></textarea>
            <br>
            <p>	Explica un día típico en tu fin de semana	</p>
            <textarea required class="form-control" rows="10" name="P6"></textarea>
            <br>
            <p>	Cuantas horas al día le puedes dedicar a tu perro al día	</p>
            <select required class="form-select" name="P7">
                @if(old('P7'))
                <option selected value="{{old('P7')}}">{{old('P7')}}	</option>
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
                <option value="10">10	</option>
                <option value="11">11	</option>
                <option value="12">12	</option>
            </select>
            <br>
            <p>	¿Realizaran ejercicio con el perro?	</p>
            <select required class="form-select" name="P8">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Qué tipo de ejercicio?	</p>
            <textarea required class="form-control" rows="10" name="P9"></textarea>
            <br>
            <p>	Especifica el número de metros cuadrados de la casa	</p>
            <input required type="number" name="P10" class="form-control" value="{{old('P10')}}" placeholder="">
            <br>
            <p>	¿Tipo de inmueble?	</p>
            <select required class="form-select" name="P11">
                @if(old('P11'))
                <option selected value="{{old('P11')}}">{{old('P11')}}	</option>
                @endif
                <option value="0" selected>Casa</option>
                <option value="1">Departamento</option>
                <option value="2">Condominio / Casa adosada</option>
            </select>
            <br>
            <p>	¿Cuántas horas al día va a estar solo el perro?	</p>
            <select required class="form-select" name="P12">
                @if(old('P12'))
                <option selected value="{{old('P12')}}">{{old('P12')}}	</option>
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
                <option value="0" selected>Adentro del hogar</option>
                <option value="1">Al aire libre</option>
                <option value="2">Refugio al aire libre</option>
            </select>
            <br>
            <p>	¿Tienes un espacio al aire libre en tu casa?	</p>
            <select required class="form-select" name="P14">
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Donde va a dormir el perro?	</p>
            <textarea class="form-control" required rows="10" name="P15"></textarea>
            <br>
            <p>	¿Por qué te interesa adoptar un perro?	</p>
            <textarea class="form-control" required rows="10" name="P16"></textarea>
            <br>
            <p>	¿Sabes algo sobre entrenar perros?	</p>
            <textarea class="form-control" required rows="10" name="P17"></textarea>
            <br>
            <p>	¿Cuánto persives al mes?	</p>
            <input type="number" name="P18" class="form-control" value="{{old('P18')}}" placeholder="">
            <br>
            <p>	Domicilio del veterinario más cerca de tu domicilio	</p>
            <input type="text" name="P19" class="form-control" value="{{old('P19')}}" placeholder="">
            <br>
            <p>	Si ocurre una emergencia crees poder llevar a tu perro inmediatamente	</p>
            <select required class="form-select" name="P20">
                @if(old('P20'))
                <option selected value="{{old('P20')}}">
                    @if(old('P20') == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Estas dispuest@ a que alguien de nuestro refugio revise tu casa?	</p>
            <select required class="form-select" name="P21">
                @if(old('P21'))
                <option selected value="{{old('P21')}}">
                    @if(old('P21') == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Estas dispuest@ a que alguien de nuestro refugio tenga una video llamada para mostrar tu casa?	</p>
            <select required class="form-select" name="P22">
                @if(old('P22'))
                <option selected value="{{old('P22')}}">
                    @if(old('P22') == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Todas las personas del hogar están de acuerdo con la adopción del perro?	</p>
            <select required class="form-select" name="P23">
                @if(old('P23'))
                <option selected value="{{old('P23')}}">
                    @if(old('P23') == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <p>	¿Alguien tiene alergia a los perros?	</p>
            <select required class="form-select" name="P24">
                @if(old('P24'))
                <option selected value="{{old('P24')}}">
                    @if(old('P24') == 1)
                    No
                    @else
                    Si
                    @endif
                </option>
                @endif
                <option value="0">Si</option>
                <option value="1">No</option>
            </select>
            <br>
            <div class="d-grid gap-2">
                <button class="btn btn-primary btn-lg" type="submit">Guardar solicitud de adopción</button>
            </div>
        </form>
    </div>
    <br>
  </div>
  <br>
  <br>
</div>
@endsection