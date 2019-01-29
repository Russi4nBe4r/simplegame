<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
	    	'name' => 'test_1',
		'email' => 'test1@example.com',
		'password' => Hash::make('password'),
		'event_token' => Hash::make('test1@example.com'),
            ]);
	    DB::table('users')->insert([
                'name' => 'test_2',
                'email' => 'test2@example.com',
		'password' => Hash::make('password'),
		'event_token' => Hash::make('test2@example.com')
            ]);
    }
}
