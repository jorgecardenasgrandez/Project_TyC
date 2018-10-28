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
                'usuario_type'=>'administrador'
            ]
        );

        Usuario::create(
        [
            'usuario'=>'silvia123@gmail.com',
            'password'=>'11111111',
            
            'usuario_type'=>'profesor'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'beatriz123@gmail.com',
            'password'=>'22222222',
            
            'usuario_type'=>'profesor'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'enedina123@gmail.com',
            'password'=>'33333333',
  
            'usuario_type'=>'profesor'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'doris123@gmail.com',
            'password'=>'44444444',
      
            'usuario_type'=>'profesor'
        ]
        );
        
        Usuario::create(
        [
            'usuario'=>'carlo123@gmail.com',
            'password'=>'70992942',
    
            'usuario_type'=>'alumno'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'luz123@gmail.com',
            'password'=>'70115689',
          
            'usuario_type'=>'alumno'
        ]
        );

        Usuario::create(
        [
            'usuario'=>'carmen123@gmail.com',
            'password'=>'69122314',
            'usuario_type'=>'alumno'
        ]
        );
    }
}
