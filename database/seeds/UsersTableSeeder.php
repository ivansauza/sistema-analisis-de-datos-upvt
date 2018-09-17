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
        DB::table('users')->insert([
        	'name' => 'Jael', 
        	'apellidos' => 'Rojas', 
        	'email' => 'jael@upvt.com', 
            'password' => bcrypt('secret'), 
            'admin' => true
        ]);

        DB::table('role_user')->insert([
            'role_id' => 1, 
            'user_id' => 1
        ]);

        DB::table('programa_user')->insert([
            'programa_id' => 2, 
            'user_id' => 1
        ]);

        DB::table('programa_user')->insert([
            'programa_id' => 8, 
            'user_id' => 1
        ]);

        DB::table('users')->insert([
            'name' => 'Arlet', 
            'apellidos' => '', 
            'email' => 'arlet@upvt.com', 
            'password' => bcrypt('secret'), 
            'admin' => true
        ]);
    }
}
