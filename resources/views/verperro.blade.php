@extends('layouts.home')
@section('content')

    <style>
        

    </style>
    @php
     $fotos = DB::table('detalleperro')->where('id_perro', $perro->id)->get();
     $countfoto = DB::table('detalleperro')->where('id_perro', $perro->id)->count();
     $numfoto = 0;   
    @endphp
  <br>
  <br>
  <br>
<div class="container">
  @if (Session::has('mensaje'))
          <div class="alert alert-success  alert-dismissible fade show" role="alert">
            Se agregó al carrito el perro {{$perro->nombre}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <br>
          <br>
  @endif
</div>
  <div class="container">
  <div class="row">
      <div class="col-lg-7">
        {{--  --}}
        <div class="containers">
            @foreach ($fotos as $foto)
            <div class="mySlides">
                <div class="numbertexts">{{$numfoto = $numfoto + 1}} / {{$countfoto}}</div>
                <img style="height: 60vh; width: -webkit-fill-available;" class="imgs" src="{{ url('getfile/' .$foto->foto_url )}}">
              </div>
            @endforeach

              
            <a class="prevs" onclick="plusSlides(-1)">❮</a>
            <a class="nexts" onclick="plusSlides(1)">❯</a>
          
            <div class="caption-containers">
              <p id="caption"></p>
            </div>
          
            <div class="rows">
                @php
                $numfoto = 0;
                @endphp
                @foreach ($fotos as $foto)
                <div class="columns">
                    <img style="height: 10vh; width: 100%;" class="demos cursors imgs" src="{{ url('getfile/' .$foto->foto_url )}}" onclick="currentSlide({{$numfoto = $numfoto + 1}})">
                  </div>
                @endforeach
              
            </div>
          </div>
        {{--  --}}
      </div>
    <div class="col col-lg-5">
        <h1 class="text-center">¡Mi nombre es {{$perro->nombre}}!</h1>
        <br>
        {{-- <div class="d-grid gap-2">
            <button style="background: rgb(187, 187, 187);" class="btn btn-light btn-lg fw-bolder" type="submit">
                <i class="fa-solid fa-share-from-square"></i> Compartir
            </button>
        </div>    --}}
        <hr>
        @if(Auth::user())
        @if(Auth::user()->rol == 0)
        <div class="d-grid gap-2">
            {{-- @if(Auth::check()) href="{{route('solicitud_adopcion',$perro->id)}}" @endif --}}
            
            @if ($perro->disponibilidad == 0)
              <a href="{{route('agregarPerroCarrito',$perro->id)}}" class="btn btn-success btn-lg fw-bolder boton">
              <i class="fa-solid fa-cart-shopping"></i> Agregar al carrito
              </a>
            @else    
            <a style="background: rgb(187, 187, 187);" class="btn btn-light btn-lg fw-bolder">
              <i class="fa-solid fa-cart-shopping"></i> Perro no disponible
              </a>
            @endif
        </div>
        @endif
        @endif

        <br>
        <br>
        <div style="border-radius: 1rem; background: rgb(211, 211, 211);" class="container">
            <br>
            <div class="row">
                <h3 class="">Datos a cerca de mi</h3>
                <br>
                <br>
                <hr>
                <br>
                <br>
                <div class="col col-lg-6"><i class="fa-solid fa-dog"></i> Raza: {{$perro->raza}}<br><br></div>
                <div class="col col-lg-6"><i class="fa-solid fa-calendar-days"></i> Edad: {{$perro->edad}} años<br><br></div>
                <div class="col col-lg-6">
                    <i class="fa-solid fa-venus-mars"></i> Sexo: 
                    @if ($perro->sexo == 0)
                    Macho
                    @else
                    Hembra
                    @endif
                    <br><br></div>
                <div class="col col-lg-6"><i class="fa-solid fa-weight-hanging"></i> Peso: {{$perro->peso}} kg<br><br></div>
                <div class="col col-lg-12">
                    <p><i class="fa-solid fa-circle-info"></i> Descripción:</p>
                    <p style="white-space: pre; white-space: pre-wrap;">{{$perro->descripcion}}</p>
                </div>
            </div>
            <br>  
        </div>
    </div>
  </div>
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);
    
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("demos");
      let captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" actives", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " actives";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>
@endsection