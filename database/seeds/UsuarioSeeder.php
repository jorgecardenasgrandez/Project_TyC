<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Usuario;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create(
            [
                'usuario'=>'administradorCetpro@gmail.com',
                'password'=>'admi',
                'usuario_type'=>'administrador',
                'estado'=>'desconectado'
            ]
        );
        
        Usuario::create(
        [
            'usuario'=>'mrks.95617@gmail.com',
            'password'=>'70992942',
            'usuario_type'=>'alumno',
            'estado'=>'desconectado'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'luz.malca10@gmail.com',
            'password'=>'70115689',
            'usuario_type'=>'alumno',
            'estado'=>'desconectado'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'carmenluisa-reyes@gmail.com',
            'password'=>'69122314',
            'usuario_type'=>'alumno',
            'estado'=>'desconectado'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'beatriz1@gmail.com',
            'password'=>'12345678',
            'usuario_type'=>'profesor',
            'estado'=>'desconectado'
        ]
        );

        Usuario::create(
            [
                'usuario'=>'enedina1@gmail.com',
                'password'=>'11111111',
                'usuario_type'=>'profesor',
                'estado'=>'desconectado'
            ]
        );

        Usuario::create([
            'usuario'=>'doris1@gmail.com',
            'password'=>'22222222',
            'usuario_type'=>'profesor',
           'estado'=>'desconectado'
        ]);

        Usuario::create([
            'usuario'=>'silvia1@gmail.com',
            'password'=>'33333333',
            'usuario_type'=>'profesor',
           'estado'=>'desconectado'
        ]);
    }
}
