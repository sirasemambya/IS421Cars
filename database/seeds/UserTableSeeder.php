<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        User::create([
        	'username' => 'sl597',
        	'password' => bcrypt('sl090195'),
            'firstName' => 'Sabrina',
            'lastName' => 'Lam'
        	]);
        User::create([
            'username' => 'bob',
            'password' => bcrypt('bob'),
            'firstName' => 'Bob',
            'lastName' => 'Bobbinson'
            ]);
    }
}
