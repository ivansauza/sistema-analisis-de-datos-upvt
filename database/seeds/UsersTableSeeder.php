<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Agregar Director de Carrera */
        DB::table('users')->insert([
            'prefijo'   => 'M. en C.E.', 
        	'name'      => 'Leticia Jael', 
        	'apellidos' => 'Rojas Ortiz', 
            'email'     => 'jael@upvt.com',
            'username'  => '1', 
            'password'  => bcrypt('secret'), 
            'admin'     => true
        ]);
        
        /** Agregar el Rol de Director */
        DB::table('role_user')->insert([
            'role_id' => 1, 'user_id' => 1 // Rol de Director
        ]);
        
        /** Agregar Programas Educativos */
        DB::table('programa_user')->insert([
            ['programa_id' => 2, 'user_id' => 1], // Ingeniería en Informática
            ['programa_id' => 8, 'user_id' => 1] // Maestría en Administración
        ]);
    }
}
