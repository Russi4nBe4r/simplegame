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
		'name' => 'test_1',
		'email' => 'test1@example.com',
		'password' => bcrypt('password'),],
		[
		'name' => 'test_2',
                'email' => 'test2@example.com',
                'password' => bcrypt('password'),
	]);
    }
}
