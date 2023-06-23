<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado</title>
</head>
<body>
    <style>
    body{
        outline: 30px double #1C6EA4;
    outline-offset: 0px;
    padding: 4rem;
    font-family: sans-serif;
    }
    .id{
    position: fixed;
    bottom: 24px;
    left: 4%;
    }
    </style>

{{-- <img style="width: 40px;" src="" alt=""> --}}


    <h2 style="text-align: center;">
    Esto es para certificar que yo, 
    </h2>
    <h1 style="text-align: center;">{{$info['nombrePersona']}}</h1>

    <br>

    <h2 style="text-align: center;">
        he adoptado oficialmente a:
    </h2>

    <h1 style="text-align: center;">
        {{$info['nombrePerro']}}
    </h1>

    <br>

    <h3 style="text-align: justify;">
        

        Al firmar este certificado, prometo alimentarte, pasearte, 
        darte muchas caricias en la barriga, darte premios, 
        ser tu mejor amigo y amarte más que a nada en el mundo.
    </h3>
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr style="width: 60%;">
    <p style="text-align: center;">firma</p>

    
    <p class="id">#{{$info['idSolicitud']}}</p>
</body>
</html>