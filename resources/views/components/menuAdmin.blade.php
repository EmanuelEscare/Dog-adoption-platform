<div class="col-lg-3">
<a href="{{route('perros')}}" style="text-decoration: none;">
    <div @if(Route::currentRouteName() == 'perros') style="width: 100%!important;" @endif class="cartasadmin shadow perros">
        <div class="row">
            <div class="col">
                <p style="font-size: 1.5rem;">Perros</p>
            </div>
            <div class="col">
                <h1 style="text-align: center">
                    <i class="fa-solid fa-paw"></i>
                </h1>
            </div>
        </div>
    </div>
</a>
<br>
<br>
<a href="{{route('usuarios')}}" style="text-decoration: none;">
    <div @if(Route::currentRouteName() == 'usuarios') style="width: 100%!important;" @endif class="cartasadmin shadow usuarios">
        <div class="row">
            <div class="col">
                <p style="font-size: 1.5rem;">Usuarios</p>
            </div>
            <div class="col">
                <h1 style="text-align: center">
                    <i class="fa-solid fa-users"></i>
                </h1>
            </div>
        </div>
    </div>
</a>
<br>
<br>
<a href="{{route('solicitudes')}}" style="text-decoration: none;">
    <div @if(Route::currentRouteName() == 'solicitudes') style="width: 100%!important;" @endif class="cartasadmin shadow solicitudes">
        <div class="row">
            <div class="col">
                <p style="font-size: 1.5rem;">Solicitudes</p>
            </div>
            <div class="col">
                <h1 style="text-align: center">
                    <i class="fa-solid fa-file-invoice"></i>
                </h1>
            </div>
        </div>
    </div>
</a>
<br>
</div>
