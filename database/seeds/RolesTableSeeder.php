<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
        	'name' => 'Director', 
        	'slug' => 'director', 
        	'description' => 'Director principal de la carrera', 
        	'special' => 'all-access'
        ]);

        DB::table('roles')->insert([
        	'name' => 'PTC', 
        	'slug' => 'ptc', 
        	'description' => 'Profesor de tiempo completo', 
        	'special' => 'no-access'
        ]);

        DB::table('roles')->insert([
        	'name' => 'Secretaria', 
        	'slug' => 'secretaria', 
        	'description' => '', 
        	'special' => 'no-access'
        ]);
    }
}
