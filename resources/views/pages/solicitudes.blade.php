@if (count($solicitudes))
@foreach ($solicitudes as $solicitud)
<tr>
    @php
        $user = DB::table('users')->where('id', $solicitud->user_id)->first();
    @endphp
    <th class="text-center" scope="row">{{$solicitud->id}}</th>
    <td class="text-center">{{$user->email}}</td>
    <td class="text-center">
        @if ($solicitud->status == 1)
            Pendiente
        @endif
        @if ($solicitud->status == 2)
            Finalizada
        @endif

    </td>
    <td class="text-center">{{$solicitud->fecha}}</td>
    <td class="text-center">
      <div class="d-grid gap-2">
        @if ($solicitud->status == 1)
        <a href="{{route('aprobarNegarVista',$solicitud->id)}}" class="btn btn-warning"><i style="color: white;" class="fa-solid fa-file"></i></a>
        @endif
        @if ($solicitud->status == 2)
        <a href="{{route('verResolucion',$solicitud->id)}}" class="btn btn-primary">Ver Resolución</a>
        @endif
      </div>
    </td>

    <td class="text-center">
      <div class="d-grid gap-2">
        <button data-bs-toggle="modal" data-bs-target="#exampleModal{{$solicitud->id}}" class="btn btn-danger"><i style="color: white;" class="fa-solid fa-trash"></i></button>
      </div>
    </td>
  </tr>
@endforeach


@foreach ($solicitudes as $solicitud)
                    <!-- Modal eliminar solicitud -->
                <div class="modal fade" id="exampleModal{{$solicitud->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar solicitud con folio: "{{$solicitud->id}}"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        ¿Seguro que quieres eliminar el registro de con el folio: "{{$solicitud->id}}"?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{route('eliminarSolicitud',$solicitud->id)}}" class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>
@endforeach
@endif