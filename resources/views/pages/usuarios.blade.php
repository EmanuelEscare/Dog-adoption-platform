@if (count($usuarios))
@foreach ($usuarios as $usuario)
<tr>
    <th class="text-center" scope="row">{{$usuario->id}}</th>
    <td class="text-center">{{$usuario->nombre}}</td>
    <td class="text-center">{{$usuario->email}}</td>
    <td class="text-center">{{$usuario->telefono}}</td>


    <td class="text-center">
      <div class="d-grid gap-2">
        <button data-bs-toggle="modal" data-bs-target="#exampleModal{{$usuario->id}}" class="btn btn-danger"><i style="color: white;" class="fa-solid fa-trash"></i></button>
      </div>
    </td>
  </tr>
@endforeach


@foreach ($usuarios as $usuario)
                    <!-- Modal eliminar usuario -->
                <div class="modal fade" id="exampleModal{{$usuario->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar usuario "{{$usuario->nombre}}"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        ¿Seguro que quieres eliminar el usuario con email: "{{$usuario->email}}"?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{route('eliminarUsuario',$usuario->id)}}" class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>
@endforeach
@endif