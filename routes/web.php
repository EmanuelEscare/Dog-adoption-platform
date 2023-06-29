<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

use App\Mail\GmailMail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ADOPTANTES

Route::get('/perfil', function () {
    $solicitudes = DB::table('solicitudes')->where('user_id', Auth::user()->id)->where('status', '!=' , 0)->get();
    return view('perfil')->with('solicitudes', $solicitudes);
})->name('perfil')->middleware('auth');


// INDEX

Route::get('/', function () {
    return view('index');
});

// INICIAR SESION

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login_form', [UserController::class, 'login_form'])->name('login_form');

// CERRAR SESION

Route::get('/out', function () {
    Auth::logout();
    return redirect('/');
})->name('out');

// MODIFICAR USUARIO

Route::get('/modificarUsuario', function () {
    
    return view('modificarUsuarioView');
})->name('modificarUsuario');

Route::post('/guardarModificarUsuario', [UserController::class, 'guardarModificarUsuario'])->name('guardarModificarUsuario');

// MODIFICAR SOLICITUD

Route::get('/modificarSolicitud/{id}', function ($id) {
    
    $solicitud = DB::table('solicitudes')->where('id', $id)->first();
    return view('modificarSolicitudView')->with('solicitud', $solicitud);
})->name('modificarSolicitud');

Route::post('/guardarModificarSolicitud', [UserController::class, 'guardarModificarSolicitud'])->name('guardarModificarSolicitud');


// ELIMINAR CUENTA

Route::get('/eliminarCuenta', function () {
    $user = Auth::user();
    Auth::logout();
    DB::table('users')->where('id', $user->id)->where('rol', 0)->delete();

    $solicitudes = DB::table('solicitudes')->where('id', $user->id)->get();
    foreach ($solicitudes as $solicitud) {
        
    DB::table('solicitudes')->where('id', $solicitud->id)->delete();
    DB::table('detallesolicitud')->where('solicitudes_id', $solicitud->id)->delete();

    DB::table('perro')->where('id', $solicitud->perro_id)->update(['disponibilidad' => 0]);
    }
    
    
    
    return redirect('/')->with('mensaje', '1');;
})->name('eliminarCuenta');

// REGISTRARSE

Route::get('/register_form', function () {
    return view('register');
})->name('register_form');

Route::post('/register', [UserController::class, 'register'])->name('register');

Route::post('/buscarPerro', [UserController::class, 'buscarPerro'])->name('buscarPerro');

Route::get('/resultados/{raza}/{edad}', function ($raza, $edad) {

    if ($edad == '100' && $raza != '0') {
        $perros = DB::table('perros')->where('disponibilidad', 0)->where('raza', $raza)->paginate(20);
    }
    if ($edad != '100' && $raza == '0') {
        $perros = DB::table('perros')->where('disponibilidad', 0)->where('edad', $edad)->paginate(20);
    }
    if ($edad == '100' && $raza == '0') {
        $perros = DB::table('perros')->where('disponibilidad', 0)->paginate(20);
    }
    if ($edad != '100' && $raza != '0') {
        $perros = DB::table('perros')->where('disponibilidad', 0)->where('raza', $raza)->where('edad', $edad)->paginate(20);
    }

    return view('resultados')->with('perros', $perros)->with('raza', $raza)->with('edad', $edad);
})->name('resultados');

// VER PERFIL PEERRO

Route::get('/verperro/{id}', function ($id) {
    $perro = DB::table('perros')->where('id', $id)->first();
    return view('verperro')->with('perro', $perro);
})->name('verperro');

// Enviar a formulario de solicitud
Route::get('/solicitud_adopcion', function () {
    
    if (Auth::user()->rol == 1) {
       return redirect()->back();
    }
    return view('solicitud_adopcion');
})->name('solicitud_adopcion')->middleware('auth');

Route::post('/solicitudAdopcion', [UserController::class, 'solicitudAdopcion'])->name('solicitudAdopcion');


// Carrito de perros

Route::get('/carrito_perro', function () {
    if(Auth::user()->rol == 0){
    $solicitudId = DB::table('solicitudes')->where('user_id', Auth::user()->id)->where('status', 0)->first();
    }else{
        return view('/');
    }
    if ($solicitudId) {
    $idS = $solicitudId->id;
    }else{
        $idS = 0;
    }
  

    $sperros = DB::table('perrosolicitud')->where('solicitudes_id', $idS)->get();
    return view('carrito_perro')->with('sperros', $sperros);
})->name('carrito_perro')->middleware('auth');


// eliminar perro del carrito

Route::get('/eliminarPerroCarrito/{id}', function ($id) {
    $perro = DB::table('perrosolicitud')->where('id', $id)->delete();
    return redirect()->back();
})->name('eliminarPerroCarrito');


//agregar perro al carrito

Route::get('/agregarPerroCarrito/{id}', function ($id) {
    if (Auth::user()->rol == 1) {
        return redirect()->back();
     }
    
     if(!DB::table('solicitudes')->where('user_id', Auth::user()->id)->where('status', 0)->first()){
        $solicitud = DB::table('solicitudes')->insert([
            'status' => 0,
            'user_id' => Auth::user()->id
        ]);
     }

    $solicitudId = DB::table('solicitudes')->where('user_id', Auth::user()->id)->where('status', 0)->first()->id;

    if(DB::table('perrosolicitud')->where('perro_id', $id)->where('solicitudes_id', $solicitudId)->count()){
        return redirect()->back();
    }

    $perro = DB::table('perrosolicitud')->insert([
        'perro_id' => $id,
        'solicitudes_id' => $solicitudId
    ]);

    return redirect()->back()->with('mensaje', '1');
})->name('agregarPerroCarrito')->middleware('auth');

//=======================================|ADMIN RUTAS|==========================================

// PERROS --------------------------------------------------------------

Route::get('perros/search', [AdminController::class, 'searchPerros']);

Route::get('/perros', function () {
    $perros = DB::table('perros')->paginate(7);
    
    return view('admin.perros')->with('perros', $perros);
})->name('perros');

Route::get('/agregar_perro', function () {
    return view('admin.agregar_perro');
})->name('agregar_perro');

Route::get('/eliminarPerro/{id}', function ($id) {
    DB::table('perros')->where('id', $id)->delete();


    return redirect()->back()->with('mensaje', '1');
})->name('eliminarPerro');

Route::post('/agregarPerro', [AdminController::class, 'agregarPerro'])->name('agregarPerro');

Route::get('/editar_perro/{id}', function ($id) {
    $perro = DB::table('perros')->where('id', $id)->first();
    $fotos = DB::table('detalleperro')->where('perro_id', $id)->get();
    return view('admin.editar_perro')->with('perro', $perro)->with('fotos', $fotos);
})->name('editar_perro');

Route::post('/editarPerro', [AdminController::class, 'editarPerro'])->name('editarPerro');

// gestionar fotos ----------------------------------------------------

Route::post('/agregarFotoPerro', [AdminController::class, 'agregarFotoPerro'])->name('agregarFotoPerro');

Route::get('/eliminarFotoPerro/{id}', function ($id) {  
    $url = DB::table('detalleperro')->where('id', $id)->first();
    $partes = explode("/", $url->foto_url);
    DB::table('detalleperro')->where('id', $id)->delete();

    
    $file = Storage::disk($partes[0])->delete($partes[1]);
    return redirect()->back()->with('eliminar', '1');

})->name('eliminarFotoPerro');

// Obtener archivos guardados
Route::get('getfile/{folder}/{file}', function ($folder, $file) {
    $filename = $file;
    $isset = Storage::disk($folder)->exists($filename);
    
    if ($isset) {
        $file = Storage::disk($folder)->get($filename);
        return new Response($file, 200);
    } else {
        return response()->json(['message' => 'La foto no existe'], 404);
    }
})->name('getfile');


// USUARIOS --------------------------------------------------------------
Route::get('/usuarios', function () {
    $usuarios = DB::table('users')->where('rol', 0)->paginate(7);
    
    return view('admin.usuarios')->with('usuarios', $usuarios);
})->name('usuarios');



Route::get('usuarios/search', [AdminController::class, 'searchUsuarios']);

Route::get('/eliminarUsuario/{id}', function ($id) {
    DB::table('users')->where('id', $id)->delete();
    DB::table('solicitudes')->where('user_id', $id)->delete();

    return redirect()->back()->with('mensaje', '1');
})->name('eliminarUsuario');


// SOLICITUDES -----------------------------------------------------------
Route::get('/solicitudes', function () {
    $solicitudes = DB::table('solicitudes')->where('status', '!=' , 0)->paginate(7);
    // dd($solicitudes);
    return view('admin.solicitudes')->with('solicitudes', $solicitudes);
})->name('solicitudes');

Route::get('solicitudes/search', [AdminController::class, 'searchsolicitudes']);

Route::get('/eliminarSolicitud/{id}', function ($id) {

    // Consultar a la solicitud
    $solicitud = DB::table('solicitudes')->where('id', $id)->delete();


    return redirect()->back()->with('mensaje', '1');
})->name('eliminarSolicitud');

Route::get('/aprobarNegarVista/{id}', function ($id) {
    $solicitud = DB::table('solicitudes')->where('id', $id)->first();
    $usuario = DB::table('users')->where('id', $solicitud->user_id)->first();
    

    // Vistas
    return view('admin.aprobarNegar')->with('solicitud', $solicitud)->with('usuario', $usuario);
})->name('aprobarNegarVista');


Route::get('/verResolucion/{id}', function ($id) {
    $solicitud = DB::table('solicitudes')->where('id', $id)->first();
    

    // Vistas
    return view('admin.verResolucion')->with('solicitud', $solicitud);
})->name('verResolucion');

// ------------------------ EMAIL

Route::get('/aprobarNegar/{opcion}/{solicitud}', function ($opcion, $solicitud) {
    // Obtenemos la solicitud a actualizar (Objeto)
    $solicitud = DB::table('solicitudes')->where('id', $solicitud)->first();
    // Obtenemos al usuario de la solicitud a informar
    $usuario = DB::table('users')->where('id', $solicitud->user_id)->first();
    // Obtenemos información del perro
    // $perro = DB::table('perros')->where('id', $solicitud->perro_id)->first();

    if($opcion == 2){
        // Aprobar

    $mailData = [
        'title' => 'Resolución de la solicitud de adopción #'.$solicitud->id.'',
        'type' => '1',
        'body' => 'Le informamos que su solicitud de adopción ha sido aceptada, podrá pasar por el perro dentro de nuestros horarios.'
    ];
         
    Mail::to('emaescov@gmail.com')->send(new GmailMail($mailData));
             
        
    DB::table('solicitudes')->where('id', $solicitud->id)->update(['status' => 2]);
    }else{
        // Negar

        $mailData = [
            'title' => 'Resolución de la solicitud de adopción #'.$solicitud->id.'',
            'type' => '2',
            'body' => 'Le informamos que su solicitud de adopción ha sido negada, ya que no cumple con los criterios para la adopción, para más información marque al 3317009646.'
        ];
         
        Mail::to('emaescov@gmail.com')->send(new GmailMail($mailData));
           
    
    
    // DB::table('perros')->where('id', $solicitud->perro_id)->update(['disponibilidad' => 0]);
    DB::table('solicitudes')->where('id', $solicitud->id)->update(['status' => 3]);
    }

    return redirect()->route('solicitudes')->with('resolucion', 'La resolucion de la solicitud a sido guardada y enviada al adoptante');
})->name('aprobarNegar');


Route::post('/guardarResolucion', [AdminController::class, 'guardarResolucion'])->name('guardarResolucion');


// PDF


Route::get('/imprimir/{user}/{perro}/{id}', function ($user, $perro, $id) {

    $perro = DB::table('perros')->where('id', $perro)->first();
    $user = DB::table('users')->where('id', $user)->first();

    $info = ['nombrePerro' => $perro->nombre, 'nombrePersona' => $user->nombre, 'solicitudes_id' => $id];


    $pdf = \PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
    $pdf = \PDF::loadView('pdf.certificado', compact('info'))->setPaper('a4', 'landscape');
    return $pdf->download('certificado.pdf');
    return view('pdf.certificado', compact('info'));
})->name('imprimir');