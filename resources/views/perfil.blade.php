@extends('layouts.home')
@section('content')
{{-- @section('title', 'Realizar pedido') --}}
@php
$gos = "Gos d'Atura Catalá";    
@endphp
<div class="container">
  <br>
  <br>
  <br>

<div class="shadow card" style="border-radius: 1rem;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h2> {{Auth::user()->nombre}}</h2>
                <br>
            </div>
            <div class="col-lg-2">
                <div class="d-grid gap-2">
                    <a class="btn btn-warning btn-lg" href="{{route('modificarUsuario')}}">Modificar perfil</a>
                <br>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="d-grid gap-2">
                    <button class="btn btn-danger btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#ModalEliminar">Eliminar cuenta</button>
                <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container" style="min-height: 70px;">
        @if (Session::has('mensaje'))
        <div class="alert alert-success  alert-dismissible fade show" role="alert">
            Se realizó con éxito la acción.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif
    </div>
    <br>
    <hr>
    {{-- SOLICITUDES --}}
    <div class="container">
        <br>
        <h3 class="text-center">Solicitudes de adopción</h3>
        <br>
       
            <div style="border-radius: 1rem; background: rgb(211, 211, 211);" class="container">
                <br>
                <table class="table">
                    <thead>
                        <tr>
                          <th class="text-center" scope="col">FOLIO</th>
                          <th class="text-center" scope="col">PERROS</th>
                          <th class="text-center" scope="col">status</th>
                          <th class="text-center" scope="col">FECHA</th>
                          <th class="text-center" scope="col">MODIFICAR</th>
                          <th class="text-center" scope="col">ELIMINAR</th>

                        </tr>
                      </thead>
                    <tbody>
                        @if (count($solicitudes))
                        @foreach ($solicitudes as $solicitud)
                        <tr>
                            @php
                                $user = DB::table('users')->where('id', $solicitud->user_id)->first();
                                // $perro = DB::table('perros')->where('id', $solicitud->perro_id)->first()
                            @endphp
                            <th class="text-center" scope="row">{{$solicitud->id}}</th>
                            <td class="text-center">
                              {{-- Perros solicitados --}}
                              @php
                              $perros = DB::table('perrosolicitud')->where('solicitudes_id', $solicitud->id)->get();
                              @endphp
                              @foreach ($perros as $perro)
                              @php
                              // dd($perro->perro_id);
                                  $info = DB::table('perros')->where('id', $perro->perro_id)->first();
                              @endphp
                              <a href="{{route('verperro',$info->id)}}" target="_blank">{{$info->nombre }} #{{$info->id}}</a>
                              @if ($perro->status == 1)
                              &nbsp; &nbsp;<i style="color: green;" class="fa-solid fa-circle-check"></i>
                              @else
                              &nbsp; &nbsp;<i style="color: red;" class="fa-solid fa-circle-xmark"></i>
                              @endif
                              <br>
                              @endforeach
                            </td>
                            <td class="text-center">
                              @if ($solicitud->status == 1)
                              Pendiente
                              @endif
                              @if ($solicitud->status == 2)
                              Finalizada
                              @endif
                            </td>
                            <td class="text-center">{{$solicitud->fecha}}</td>

                            <td>
                              <div class="d-grid gap-2">
                                
                                <a href="{{route('modificarSolicitud', $solicitud->id)}}" class="btn btn-warning"><i style="color: white;" class="fa-solid fa-edit"></i></a>
                             
                              </div>
                            </td>
                        
                            <td class="text-center">
                              <div class="d-grid gap-2">
                                
                                <button data-bs-toggle="modal" data-bs-target="#exampleModal{{$solicitud->id}}" class="btn btn-danger"><i style="color: white;" class="fa-solid fa-trash"></i></button>
                             
                              </div>
                            </td>
                          </tr>
                        @endforeach
                        @else
                        
                        @endif
                    </tbody>
                </table>
                <br>
            </div>
            <br>
        
    </div>
    <hr>
        <br>
    {{--  --}}
    <br>
</div>

  <br>
  <br>
{{-- Modal solicitudes eliminar --}}

@foreach ($solicitudes as $solicitud)
                    <!-- Modal eliminar solicitud -->
                <div class="modal fade" id="exampleModal{{$solicitud->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar solicitud de adopción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        ¿Seguro que quieres eliminar tu solicitud de adopción con el folio: "{{$solicitud->id}}"?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{route('eliminarSolicitud',$solicitud->id)}}" class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>
@endforeach

  {{-- Modal eliminar cuenta --}}

  <div class="modal fade" id="ModalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Eliminar cuenta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Estás seguro de que quieres eliminar tu cuenta?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a href="{{route('eliminarCuenta')}}" class="btn btn-danger">Eliminar</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection