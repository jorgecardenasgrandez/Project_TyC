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
            'name'=>'Carlo Fernando',
            'email'=>'mrks.95617@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('70992942')
        ]);

        User::create(
        [
            'name'=>'Luz Estrella',
            'email'=>'luz.malca10@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('70115689')
        ]
        );

        User::create(
        [
            'name'=>'Carmen Luisa',
            'email'=>'carmenluisa-reyes@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122314')
        ]
        );
        
        User::create(
        [
            'name'=>'Daniel',
            'email'=>'daniel@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122301')
        ]
        );
        
        User::create(
        [
            'name'=>'Jesus',
            'email'=>'jesus@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122302')
        ]
        );
        
        User::create(
        [
            'name'=>'Jairo',
            'email'=>'jairo@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122303')
        ]
        );
        
        User::create(
        [
            'name'=>'Carlos',
            'email'=>'carlospalma@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122304')
        ]
        );
        
        User::create(
        [
            'name'=>'German',
            'email'=>'german@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122305')
        ]
        );
        
        User::create(
        [
            'name'=>'Laura',
            'email'=>'laura@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122306')
        ]
        );
        
        User::create(
        [
            'name'=>'Rosali',
            'email'=>'rosali@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122307')
        ]
        );
        
        User::create(
        [
            'name'=>'Carol',
            'email'=>'carol@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122308')
        ]
        );
        
        User::create(
        [
            'name'=>'Ana',
            'email'=>'ana@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122309')
        ]
        );
        
        User::create(
        [
            'name'=>'Mariajose',
            'email'=>'mariajose@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122310')
        ]
        );
        
        User::create(
        [
            'name'=>'Lucia',
            'email'=>'lucia@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122311')
        ]
        );
        
        User::create(
        [
            'name'=>'Pool',
            'email'=>'pool@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122312')
        ]
        );
        
        User::create(
        [
            'name'=>'Gilberto',
            'email'=>'gilberto@gmail.com',
            'user_type'=>'alumno',
            'password'=>bcrypt('69122313')
        ]
        );

        User::create(
        [
            'name'=>'Beatriz Jane',
            'email'=>'beatrizj@gmail.com',
            'user_type'=>'profesor',
            'password'=>bcrypt('74856989')
        ]
        );

        User::create(
            [
            'name'=>'Enedina',
            'email'=>'enedina@gmail.com',
            'user_type'=>'profesor',
            'password'=>bcrypt('75869584')
            ]
        );

        User::create([
        'name'=>'Doris',
        'email'=>'suaf@gmail.com',
        'user_type'=>'profesor',
        'password'=>bcrypt('74145236')
        ]);

        User::create([
        'name'=>'Silvia',
        'email'=>'esph@gmail.com',
        'user_type'=>'profesor',
        'password'=>bcrypt('77889944')
        ]);
    }
}
