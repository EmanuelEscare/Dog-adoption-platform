@if (count($perros))
@foreach ($perros as $perro)
<tr>
  <th class="text-center" scope="row">{{$perro->id}}</th>
  <td class="text-center"><a href="{{route('verperro',$perro->id)}}" target="_blank" style="text-decoration: none;">{{$perro->nombre}}</a></td>
  <td class="text-center">@if($perro->disponibilidad == 0) Disponible @else No disponible @endif</td>
  <td class="text-center">{{$perro->fecha_registro}}</td>
  <td>
    <div class="d-grid gap-2">
      <a href="{{route('editar_perro',$perro->id)}}" class="btn btn-warning"><i style="color: white;" class="fa-solid fa-pen-to-square"></i></a>
    </div>
  </td>
  <td>
    <div class="d-grid gap-2">
      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal{{$perro->id}}" class="btn btn-danger"><i style="color: white;" class="fa-solid fa-trash"></i></button>
    </div>
  </td>
</tr>
@endforeach


@foreach ($perros as $perro)
                    <!-- Modal eliminar perro -->
                <div class="modal fade" id="exampleModal{{$perro->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar a "{{$perro->nombre}}"</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-center">
                        ¿Seguro que quieres eliminar el registro de "{{$perro->nombre}}"?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <a href="{{route('eliminarPerro',$perro->id)}}" class="btn btn-danger">Eliminar</a>
                      </div>
                    </div>
                  </div>
                </div>
@endforeach
@endif