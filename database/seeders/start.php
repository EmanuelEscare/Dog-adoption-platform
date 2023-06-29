<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class start extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('perros')->insert([
            ['id' => 2, 'nombre' => 'Rufo', 'raza' => 'Pug', 'edad' => 5, 'peso' => 11, 'descripcion' => '¿Qué tipo de hogar necesita Rufo?\r\n\r\n- Un hogar con o sin niños, ya que ama a todos.\r\n- Alguien que está mucho en casa.\r\n- Un hogar donde pueda ser perro único o con otro perro de compañía.', 'sexo' => 0, 'disponibilidad' => 0, 'fecha_registro' => '2022-04-18'],
            ['id' => 3, 'nombre' => 'Nena', 'raza' => 'Labrador Retriever', 'edad' => 12, 'peso' => 29, 'descripcion' => NULL, 'sexo' => 1, 'disponibilidad' => 1, 'fecha_registro' => '2022-04-20'],
            ['id' => 4, 'nombre' => 'Max', 'raza' => 'Husky Siberiano (Siberian Husky)', 'edad' => 1, 'peso' => 27, 'descripcion' => NULL, 'sexo' => 0, 'disponibilidad' => 0, 'fecha_registro' => '2022-04-20'],
            ['id' => 5, 'nombre' => 'Frida', 'raza' => 'Sin especificar', 'edad' => 2, 'peso' => 25, 'descripcion' => NULL, 'sexo' => 1, 'disponibilidad' => 0, 'fecha_registro' => '2022-04-20'],
            ['id' => 8, 'nombre' => 'Luca', 'raza' => 'Sin especificar', 'edad' => 1, 'peso' => 5, 'descripcion' => 'Perro con mancha blanca en el pecho\r\n\r\n------------------------------------------------------------------------\r\n______________________________________________________________', 'sexo' => 0, 'disponibilidad' => 1, 'fecha_registro' => '2022-05-09'],
            ['id' => 9, 'nombre' => 'Jack', 'raza' => 'Sin especificar', 'edad' => 3, 'peso' => 20, 'descripcion' => 'Perro\r\n\r\n=======================================\r\n\r\nAmigable y buena onda, ideal para niños', 'sexo' => 0, 'disponibilidad' => 0, 'fecha_registro' => '2022-05-18'],
            ['id' => 10, 'nombre' => 'Nala', 'raza' => 'Pastor Alemán', 'edad' => 0, 'peso' => 23, 'descripcion' => 'Cachorro hembra.', 'sexo' => 1, 'disponibilidad' => 0, 'fecha_registro' => '2022-05-18'],
        ]);
        

        DB::table('users')->insert([
            ['id' => 1, 'nombre' => 'John Doe', 'email' => 'johndoe@example.com', 'password' => bcrypt('asd123'), 'telefono' => '1234567890', 'fecha_nac' => '1990-01-01', 'rol' => 1, 'direccion' => '123 Main St', 'codigo' => '45130'],
            ['id' => 2, 'nombre' => 'Emanuel Escareño', 'email' => 'emaescov@gmail.com', 'password' => bcrypt('asd123'), 'telefono' => '3317009646', 'fecha_nac' => '2000-02-01', 'rol' => 0, 'direccion' => 'Av Valdepeñas 8470 #65 Paseos del Camichin', 'codigo' => '45130'],
            ['id' => 3, 'nombre' => 'Emanuel Escareño', 'email' => 'emaescov@prueba.com', 'password' => bcrypt('asd123'), 'telefono' => '36339581', 'fecha_nac' => '2000-01-25', 'rol' => 0, 'direccion' => 'Av Valdepeñas 8470 #65 Paseos del Camichin', 'codigo' => '45130'],
            ['id' => 4, 'nombre' => 'Sofia Villegas', 'email' => 'sofi@gmail.com', 'password' => bcrypt('asd123'), 'telefono' => '36339581', 'fecha_nac' => '1996-02-24', 'rol' => 0, 'direccion' => 'Av Valdepeñas 8470 #65 Paseos del Camichin', 'codigo' => '45130'],
            ['id' => 7, 'nombre' => 'Daniel Escareño', 'email' => 'daniel@gmail.com', 'password' => bcrypt('asd123'), 'telefono' => '36339581', 'fecha_nac' => '1997-03-20', 'rol' => 0, 'direccion' => 'Av Valdepeñas 8470 #65 Paseos del Camichin', 'codigo' => '45130'],
        ]);

        DB::table('solicitudes')->insert([
            ['fecha' => '2022-05-15', 'user_id' => 1, 'status' => 'Aprobado'],
        ]);

        DB::table('detalleperro')->insert([
            ['perro_id' => 2, 'foto_url' => 'fotos/U7q1RQYrh2J2pVcetxEQ1Wd9bZXOW30hqTaB8plD.jpg'],
            ['perro_id' => 2, 'foto_url' => 'fotos/geHpiMEYejfBgKHkCnaMKTYs2EXFNz53cWCM6S8s.jpg'],
            ['perro_id' => 2, 'foto_url' => 'fotos/BWOkEUq4IBVfjMGdnEAdtOuPAERpDeum41wDNImG.jpg'],
            ['perro_id' => 3, 'foto_url' => 'fotos/Z2WTW9Mu4jkdFcXhUoWgdXtAWIucHF1daFisfDt6.jpg'],
            ['perro_id' => 3, 'foto_url' => 'fotos/4q7yAOZkESYOd3aGHwDE94xGXZOR1n13jJ8RtZzH.jpg'],
            ['perro_id' => 4, 'foto_url' => 'fotos/efBQZ3XKkKHeo2jmji6PnUkajsXv94TCY3wYzLHn.jpg'],
            ['perro_id' => 5, 'foto_url' => 'fotos/kpu3y4foVyCcwx0dCSrWSaQHM9fZ4TmQF4uS92uN.jpg'],
            ['perro_id' => 8, 'foto_url' => 'fotos/RNZJiqEyJK9WJ5LKjQagDPyEkRWsMaSR34IxYJ9u.jpg'],
            ['perro_id' => 9, 'foto_url' => 'fotos/CKColwWcEkQH1bXwFNUPRYxAC6Z0bXYECTJvU0Pm.jpg'],
            ['perro_id' => 10, 'foto_url' => 'fotos/mP41UqQXaA8apZMq9suKz63Wt2tWor7GEZHRhI4h.webp'],
            ['perro_id' => 2, 'foto_url' => 'fotos/nBaHxBmi8zgQ1ZZLsayrItZhto9bGuFzqGa7AgAV.webp'],
        ]);

        DB::table('detallesolicitud')->insert([
            [
                'solicitudes_id' => 1,
                'P1' => 0,
                'P2' => 'a',
                'P3' => 'a',
                'P4' => 'a',
                'P5' => 'a',
                'P6' => 'a',
                'P7' => 1,
                'P8' => 0,
                'P9' => 'a',
                'P10' => 222,
                'P11' => 0,
                'P12' => 1,
                'P13' => '0',
                'P14' => '0',
                'P15' => 'a',
                'P16' => 'a',
                'P17' => 'a',
                'P18' => 12212,
                'P19' => 'Av Valdepeñas 8970 #89',
                'P20' => 0,
                'P21' => 0,
                'P22' => 0,
                'P23' => 0,
                'P24' => 1,
            ],
        ]);
        
        
        DB::table('perrosolicitud')->insert([
            ['perro_id' => 2, 'solicitudes_id' => 1, 'status' => 1],
            
        ]);
    }
}
