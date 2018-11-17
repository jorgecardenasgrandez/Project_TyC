<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name'=>'administrador',
                'email'=>'administradorCetpro@gmail.com',
                'user_type'=>'administrador',
                'password'=>bcrypt('admi')
            ]
        );
        
        User::create([
            'name'=>'carlo fernando',
            'email'=>'mrks.95617@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('70992942')
        ]);

        User::create(
        [
            'name'=>'luz estrella',
            'email'=>'luz.malca10@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('70115689')
        ]
        );

        User::create(
        [
            'name'=>'carmen luisa',
            'email'=>'carmenluisa-reyes@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122314')
        ]
        );

        User::create(
        [
            'name'=>'beatriz jane',
            'email'=>'beatriz1@gmail.com',
            'user_type'=>'profesor',
            'password'=>bcrypt('12345678')
        ]
        );

        User::create(
            [
            'name'=>'enedina',
            'email'=>'enedina1@gmail.com',
            'user_type'=>'profesor',
            'password'=>bcrypt('11111111')
            ]
        );

        User::create([
        'name'=>'doris',
        'email'=>'doris1@gmail.com',
        'user_type'=>'profesor',
        'password'=>bcrypt('22222222')
        ]);

        User::create([
        'name'=>'silvia',
        'email'=>'silvia1@gmail.com',
        'user_type'=>'profesor',
        'password'=>bcrypt('33333333')
        ]);
    }
}
