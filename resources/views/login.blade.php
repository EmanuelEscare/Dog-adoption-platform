@extends('layouts.home')
@section('content')
    <div class="container">
        <br>
        <br>
        <div class="container shadow-sm p-3 mb-5 bg-body rounded" style="max-width: 450px; margin: auto; border: 1px solid rgb(221, 221, 221);">
            <br>
                <h2 style="text-align: center;">Iniciar sesión</h2>
                <br>
                <br>
                    @error('email')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                    @enderror
                <form action="{{route('login_form')}}" method="POST">
                    @csrf
                    <p>Email</p>
                          <input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="">
                          <br>
                    <p>Contraseña</p>
                          <input type="password" name="password" value="" class="form-control" placeholder="">
                          <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                        </div>
                </form>
            <br>
        </div>
    </div>
@endsection
