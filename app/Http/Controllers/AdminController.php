<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Mail\GmailMail;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    //
    public function agregarPerro(Request $request){
        Validator::make($request->all(), [
            'nombre' => 'required|max:30',
            'edad' => 'required',
            'peso' => 'required',
            'descripcion' => 'max:1000',
        ])->validate();

        DB::table('perros')->insert([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'edad' => $request->edad,
            'peso' => $request->peso,
            'sexo' => $request->sexo,
            'descripcion' => $request->descripcion,
            'disponibilidad' => $request->disponibilidad,
            'fecha_registro' => date("Y-m-d"),
        ]);

        // return $request;

        return redirect()->back()->with('mensaje', '1');

    }

    public function editarPerro(Request $request){
        // return $request;

        Validator::make($request->all(), [
            'nombre' => 'required|max:30',
            'edad' => 'required',
            'peso' => 'required',
            'descripcion' => 'max:1000',
        ])->validate();

        DB::table('perros')->where('id', $request->id)->update([
            'nombre' => $request->nombre,
            'raza' => $request->raza,
            'edad' => $request->edad,
            'peso' => $request->peso,
            'sexo' => $request->sexo,
            'descripcion' => $request->descripcion,
            'disponibilidad' => $request->disponibilidad,
        ]);

        // return $request;

        return redirect()->back()->with('mensaje', '1');

    }

    public function agregarFotoPerro(Request $request){

        $fotoPerro = $request->file('foto');

        $fotoPerro = $fotoPerro->store('/fotos');

        DB::table('detalleperro')->insert([
            'perro_id' => $request->idperro,
            'foto_url' => $fotoPerro,
        ]);

        return redirect()->back()->with('agregar', '1');
    }

    public function searchPerros(Request $request){
        $perros =  DB::table('perros')->where("id",'like',$request->text."%")->take(3)->get();
        return view("pages.perros",compact("perros"));        
    }
    
    public function searchsolicitudes(Request $request){
        $solicitudes =  DB::table('solicitudes')->where('estatus', '!=' , 0)->where("id",'like',$request->text."%")->take(3)->get();
        return view("pages.solicitudes",compact("solicitudes"));        
    }
    
    public function searchUsuarios(Request $request){
        // return $request;
        $usuarios =  DB::table('users')->where('rol', 0)->where("email",'like',$request->text."%")->take(3)->get();
        return view("pages.usuarios",compact("usuarios"));        
    }

    public function guardarResolucion(Request $request){
        // return $request->input('perro5');
        // return $request;
        // ----- 0 PENDIENTE | 1 APROBADO | 2 NEGADO 

        for ($i=0; $i < $request->registro; $i++) {
            $resolucion =  $request->input('perro'.($i+1));
            $perroId = "perroId".($i+1);
            // return $resolucion;

            // Consulta perro
            $perro_id = DB::table('perrosolicitud')->where('id', $request->input($perroId))->first();
            $perro = DB::table('perros')->where('id', $perro_id->perro_id)->first();

            // Se evaluara por perro y se mandara la resolucion x mail y DB
            if($resolucion){
        
            $mailData = [
                'title' => 'Se aprobo la adopción de '.$perro->nombre.' #'.$perro->id,
                'type' => '1',
                'body' => 'Le informamos que la adopción ha sido aceptada, podrá pasar por los perro(s) dentro de nuestros horarios. folio de solicitud #'.$perro_id->id_solicitud.''
            ];
                 
            Mail::to('emaescov@gmail.com')->send(new GmailMail($mailData));
                     
            DB::table('perros')->where('id', $perro->id)->update(['disponibilidad' => 1]);
            DB::table('solicitudes')->where('id', $perro_id->id_solicitud)->update(['estatus' => 2]);
            DB::table('perrosolicitud')->where('id_solicitud', $perro_id->id_solicitud)->where('perro_id', $perro->id)->update(['estatus' => 1]);
            }else{
                // Negar
        
                $mailData = [
                    'title' => 'Se nego la adopción de '.$perro->nombre.' #'.$perro->id,
                    'type' => '2',
                    'body' => 'Le informamos que su solicitud de adopción ha sido negada, ya que no cumple con los criterios para la adopción, para más información marque al 3317009646. folio de solicitud #'.$perro_id->id_solicitud.''
                ];
                 
                Mail::to('emaescov@gmail.com')->send(new GmailMail($mailData));
                   
            
            
            DB::table('solicitudes')->where('id', $perro_id->id_solicitud)->update(['estatus' => 2]);
            DB::table('perrosolicitud')->where('id_solicitud', $perro_id->id_solicitud)->where('perro_id', $perro->id)->update(['estatus' => 2]);
            }
             
        }


    return redirect()->route('verResolucion',$perro_id->id_solicitud)->with('resolucion', 'La resolucion de la solicitud a sido guardada y enviada al adoptante');
    }


}
