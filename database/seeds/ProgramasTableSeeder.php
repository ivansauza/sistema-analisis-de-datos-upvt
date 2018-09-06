<?php

use Illuminate\Database\Seeder;

class ProgramasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        DB::table('programas')->insert([
        	'clave' => 'LNI', 
        	'nombre' => 'Licenciatura en Negocios Internacionales'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'INI', 
        	'nombre' => 'Ingeniería en Informática'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'IIS', 
        	'nombre' => 'Ingeniería Industrial y de Sistemas'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'IMA', 
        	'nombre' => 'Ingeniería en Mecánica Automotriz'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'IME', 
        	'nombre' => 'Ingeniería Mecatrónica'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'IEN', 
        	'nombre' => 'Ingeniería en Energía'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'IBT', 
        	'nombre' => 'Ingeniería en Biotecnología'
        ]);

        DB::table('programas')->insert([
        	'clave' => 'MAD', 
        	'nombre' => 'Maestría en Administración'
        ]);

    }
}
