<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sol canino</title>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="shortcut icon" href="{{asset('sol.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('font/css/all.css')}}">
    <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
@if(Auth::user())
@php
if(Auth::user()->rol == 0)
 $solicitudId = DB::table('solicitudes')->where('user_id', Auth::user()->id)->where('status', 0)->first();
@endphp
@endif
        <nav style="border-bottom: 1px #777777 solid;" class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
              <a class="navbar-brand" href="/">
                <img style="width: 30px;" src="{{asset('sol.png')}}" alt="">
                Sol canino</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 
                  
                </ul>
                <form class="d-flex">
                  @if (!Auth::check())
                  {{-- <a style="margin-left: 5px; border: 0px;" class="btn btn-secondary boton" href="">Mascotas <i class="fa-solid fa-paw"></i></a> --}}
                  <a style="margin-left: 5px;" class="btn btn-outline-primary" href="{{route('login')}}">Iniciar sesión</a>
                  <a style="margin-left: 5px;" class="btn btn-primary" href="{{route('register_form')}}">Registrarse</a>
                  @else
                  @if(Auth::user()->rol == 0)
                  <a style="margin-left: 5px; border: 0px;" class="btn btn-secondary boton" href="{{route('carrito_perro')}}"><i class="fa-solid fa-cart-shopping"></i>
                    @if ($solicitudId)
                    {{DB::table('perrosolicitud')->where('solicitudes_id', $solicitudId->id)->count()}}</a>
                    @endif
                  @endif

                  <a style="margin-left: 5px; text-decoration: none;" class="btn btn-primary" href="
                  @if(Auth::user()->rol == 1)
                  {{route('perros')}}
                  @else
                  {{route('perfil')}}
                  @endif
                  "> {{Auth::user()->nombre}}</a>
                  <a style="margin-left: 5px;" class="btn btn-danger" href="{{route('out')}}"><i class="fa-solid fa-right-from-bracket"></i></a>
                  @endif
              </form>
              </div>
            </div>
          </nav>
          
<br>
@section('content')

@show

       <br>
       <br>
</body>
</html>