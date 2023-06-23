@extends('layouts.home')
@section('content')
<div class="container">
    <br>
    <br>
    <div class="container shadow-sm p-3 mb-5 bg-body rounded" style="max-width: 450px; margin: auto; border: 1px solid rgb(221, 221, 221);">
        <br>
            <h2 style="text-align: center;">Registrarse</h2>
            <br>
            <br>
            <form action="{{route('register')}}" method="POST">
                @csrf
                <p>Nombre</p>
                @if($errors->has('name'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un nombre.</div>
                @endif
                      <input type="text" name="name" class="form-control" value="{{old('name')}}" placeholder="">
                      <br>
                <p>Fecha de nacimiento</p>
                @if($errors->has('fecha_nac'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca su fecha de nacimiento.</div>
                @endif
                      <input type="date" name="fecha_nac" class="form-control" value="{{old('fecha_nac')}}" placeholder="">
                      <br>
                <p>Teléfono</p>
                @if($errors->has('phone'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un número de teléfono (máximo 10 numeros).</div>
                @endif
                      <input type="number" name="phone" class="form-control" value="{{old('phone')}}" placeholder="">
                      <br>
                <p>Dirección</p>
                @if($errors->has('address'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca una dirección.</div>
                @endif
                      <input type="text" name="address" class="form-control" value="{{old('address')}}" placeholder="">
                      <br>
                <p>Código postal</p>
                @if($errors->has('code'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un código postal (máximo 5 numeros).</div>
                @endif
                      <input type="number" name="code" class="form-control" value="{{old('code')}}" placeholder="">
                      <br>
                <p>Email</p>
                @if($errors->has('email'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca un correo electronico.</div>
                @endif
                      <input type="email" name="email" class="form-control" value="{{old('email')}}" placeholder="">
                      <br>
                <p>Contraseña</p>
                @if($errors->has('password'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca una contraseña.</div>
                @endif
                      <input type="password" name="password" class="form-control" value="{{old('password')}}" placeholder="">
                      <br>
                <p>Confirmar contraseña</p>
                @if($errors->has('cpassword'))
                <div style="color: red; font-size: .9rem;">Por favor, introduzca nuevamente la contraseña.</div>
                @endif
                @if(Session::has('errorpassword'))
                <div style="color: red; font-size: .9rem;">La contraseña no coincide.</div>
                @endif
                      <input type="password" name="cpassword" class="form-control" value="{{old('cpassword')}}" placeholder="">
                      <br>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Crear cuenta</button>
                    </div>
            </form>
        <br>
    </div>
    <br>
</div>
@endsection