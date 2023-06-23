<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    public function login_form (Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if(Auth::user()->rol == 1){
                return redirect()->intended('/perros'); 
            }
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'Credenciales incorrectas',
        ])->onlyInput('email');
    }

    public function register(Request $request){
        
        if(Auth::check()){
            return view('/');
        }

        Validator::make($request->all(), [
            'name' => 'required|max:255',
            'fecha_nac' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required|max:250',
            'code' => 'required|max:5',
            'email' => 'required|max:64',
            'password' => 'required|max:30',
            'cpassword' => 'required'
        ])->validate();

       

        if($request->password != $request->cpassword){
            return redirect()->back()->with('errorpassword', '1')->withInput();
        }

        

        $user = User::create([
            'nombre' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'telefono' => $request->phone,
            'fecha_nac' => $request->fecha_nac,
            'direccion' => $request->address,
            'codigo' => $request->code,
        ]);

        auth()->login($user);

        // Crear solicitud canasto
        DB::table('solicitudes')->insert([
            'id_adoptante' => $user->id,
            'estatus' => 0,
        ]);

        return redirect()->to('/');
    }

    public function buscarPerro(Request $request){

        return redirect()->route('resultados', ['raza' => $request->raza, 'edad' => $request->edad]);
    }

    public function solicitudAdopcion(Request $request){
        // return $request;
        $solicitud_id = DB::table('solicitudes')->where('estatus', 0)->where('id_adoptante', Auth::user()->id)->first();
        $solicitud = DB::table('solicitudes')->where('estatus', 0)->where('id_adoptante', Auth::user()->id)->update([
            'fecha' => date("Y-m-d"),
            'estatus' => 1,
        ]);


        DB::table('detallesolicitud')->insert([
            'idSolicitud' => $solicitud_id->id,
            'P1'	=>	$request->P1,
            'P2'	=>	$request->P2,
            'P3'	=>	$request->P3,
            'P4'	=>	$request->P4,
            'P5'	=>	$request->P5,
            'P6'	=>	$request->P6,
            'P7'	=>	$request->P7,
            'P8'	=>	$request->P8,
            'P9'	=>	$request->P9,
            'P10'	=>	$request->P10,
            'P11'	=>	$request->P11,
            'P12'	=>	$request->P12,
            'P13'	=>	$request->P13,
            'P14'	=>	$request->P14,
            'P15'	=>	$request->P15,
            'P16'	=>	$request->P16,
            'P17'	=>	$request->P17,
            'P18'	=>	$request->P18,
            'P19'	=>	$request->P19,
            'P20'	=>	$request->P20,
            'P21'	=>	$request->P21,
            'P22'	=>	$request->P22,
            'P23'	=>	$request->P23,
            'P24'	=>	$request->P24
        ]);
        // $solicitud = DB::table('solicitudes')->insert([
        //     'estatus' => 0,
        //     'id_adoptante' => Auth::user()->id
        // ]);
        // DB::table('perros')->where('id', $request->idperro)->update(['disponibilidad' => 1]);

        return redirect()->route('perfil', $request->idperro)->with('mensaje', '1');
    }

    public function guardarModificarUsuario(Request $request){

        Validator::make($request->all(), [
            'name' => 'required|max:35',
            'fecha_nac' => 'required',
            'phone' => 'required|max:10',
            'address' => 'required',
            'code' => 'required',
        ])->validate();


        DB::table('users')->where('id', Auth::user()->id)->update([
            'nombre' => $request->name,
            'telefono' => $request->phone,
            'fecha_nac' => $request->fecha_nac,
            'direccion' => $request->address,
            'codigo' => $request->code,
        ]);

        return redirect()->back()->with('mensaje', '1');

        return $request;
    }

    public function guardarModificarSolicitud(Request $request){
        // return $request;

        DB::table('detallesolicitud')->where('id', $request->id)->update([
            'P1'	=>	$request->P1,
            'P2'	=>	$request->P2,
            'P3'	=>	$request->P3,
            'P4'	=>	$request->P4,
            'P5'	=>	$request->P5,
            'P6'	=>	$request->P6,
            'P7'	=>	$request->P7,
            'P8'	=>	$request->P8,
            'P9'	=>	$request->P9,
            'P10'	=>	$request->P10,
            'P11'	=>	$request->P11,
            'P12'	=>	$request->P12,
            'P13'	=>	$request->P13,
            'P14'	=>	$request->P14,
            'P15'	=>	$request->P15,
            'P16'	=>	$request->P16,
            'P17'	=>	$request->P17,
            'P18'	=>	$request->P18,
            'P19'	=>	$request->P19,
            'P20'	=>	$request->P20,
            'P21'	=>	$request->P21,
            'P22'	=>	$request->P22,
            'P23'	=>	$request->P23,
            'P24'	=>	$request->P24
        ]);

        return redirect()->route('modificarSolicitud', ['id' => $request->idsolicitud])->with('mensaje', '1');
    }

}
