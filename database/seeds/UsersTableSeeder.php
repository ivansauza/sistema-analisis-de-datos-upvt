<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Jael', 
        	'apellidos' => 'Rojas', 
        	'email' => 'jael@upvt.com', 
        	'password' => bcrypt('secret')
        ]);

        DB::table('users')->insert([
            'name' => 'Arlet', 
            'apellidos' => '', 
            'email' => 'arlet@upvt.com', 
            'password' => bcrypt('secret')
        ]);
    }
}
