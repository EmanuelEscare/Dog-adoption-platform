@extends('layouts.home')
@section('content')
    <div class="container">
        <div class="row">
            @component('components.menuAdmin')
            
            @endcomponent
            <div class="col-lg-9">
                <div class="container shadow" style="border-radius: 1rem;">
                    <br>
                    <div class="row">
                      <div class="col-lg-11">
                        <div class="input-group input-group-lg mb-3">
                          <input placeholder="Introduce el ID del perro a buscar ..." type="text" class="form-control" id="text">
                          <button class="btn btn-light" style="border: black 1px solid;" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                      </div>
                      <div class="col-lg-1">
                        <div class="d-grid gap-2">
                        <a href="{{route('agregar_perro')}}" class="btn btn-primary btn-lg"><i class="fa-solid fa-plus"></i></a>
                        </div>
                      </div>
                    </div>
                    
                    <div style="min-height: 70px;">
                      @if (Session::has('mensaje'))
                      <div class="alert alert-success  alert-dismissible fade show" role="alert">
                           Se elimino con exito el registro del perro.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                  </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="text-center" scope="col">ID</th>
                            <th class="text-center" scope="col">NOMBRE</th>
                            <th class="text-center" scope="col">DISPONIBILIDAD</th>
                            <th class="text-center" scope="col">REGISTRO</th>
                            <th class="text-center" scope="col">MODIFICAR</th>
                            <th class="text-center" scope="col">ELIMINAR</th>

                          </tr>
                        </thead>
                        <tbody id="resultados">

                         
                          
                         
                        </tbody>
                        @include('pages.perros')
                      </table>
                    </div>
                      <br>
                      {{-- ----- --}}
                      <div>

                      {!! $perros->links() !!}
                      </div>
                      {{-- ----- --}}
                      <br>
                </div>

                
            </div>
        </div>
    </div>

    <script>
      window.addEventListener('load', function(){
        document.getElementById("text").addEventListener("keyup", () => {
          if((document.getElementById("text").value.length)>=1)
          fetch(`/perros/search?text=${document.getElementById("text").value}`,{method:'get' })
          .then(response => response.text())
          .then(html => {document.getElementById("resultados").innerHTML = html })
          else
          document.getElementById("resultados").innerHTML = ""
        })
      });
    </script>
@endsection