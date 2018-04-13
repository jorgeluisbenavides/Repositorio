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
        App\User::create([
        	'name'           => 'Marco A. Ramirez',
        	'email'          => 'mark_o002@hotmail.com',
        	'password'       => bcrypt('123')
        ]);
    }
}
