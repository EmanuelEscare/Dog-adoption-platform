@extends('layouts.home')
@section('content')
    <div class="container">
        <br>
        <br>
        <br>
        <div class="container shadow card" style="border-radius: 1rem; padding-top: 1.4rem; padding-bottom: 1.4rem;">
            <h1>Modificar perfil</h1>
            <br>
            <div style="min-height: 70px;">
                @if (Session::has('mensaje'))
                <div class="alert alert-success  alert-dismissible fade show" role="alert">
                     Se ha guardado con exito tus datos.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
            </div>
            <br>
            <form action="{{route('guardarModificarUsuario')}}" method="POST">
                @csrf
                <p>Nombre</p>
                @if($errors->has('name'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un nombre.</div>
                @endif
                      <input type="text" name="name" class="form-control" value="{{old('name')}}@if(!old('name')){{Auth::user()->nombre}}@endif" placeholder="">
                      <br>
                <p>Fecha de nacimiento</p>
                @if($errors->has('fecha_nac'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca su fecha de nacimiento.</div>
                @endif
                      <input type="date" name="fecha_nac" class="form-control" value="{{old('fecha_nac')}}@if(!old('fecha_nac')){{Auth::user()->fecha_nac}}@endif" placeholder="">
                      <br>
                <p>Teléfono</p>
                @if($errors->has('phone'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un número de teléfono.</div>
                @endif
                      <input type="number" name="phone" class="form-control" value="{{old('phone')}}@if(!old('phone')){{Auth::user()->telefono}}@endif" placeholder="">
                      <br>
                <p>Dirección</p>
                @if($errors->has('address'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca la dirección de su domicilio.</div>
                @endif
                      <input type="text" name="address" class="form-control" value="{{old('address')}}@if(!old('address')){{Auth::user()->direccion}}@endif" placeholder="">
                      <br>
                <p>Código postal</p>
                @if($errors->has('code'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca el código postal de su domicilio.</div>
                @endif
                <input type="number" name="code" class="form-control" value="{{old('code')}}@if(!old('code')){{Auth::user()->codigo}}@endif" placeholder="">
                <br>
               
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
@endsection