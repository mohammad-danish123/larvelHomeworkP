<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('users')->delete();
        User::create(array(
            'name' => 'ali',
            'username' => 'alaye',
            'email'=> 'ali@gmail.com',
            'password'=>Hash::make('awesome')
        ));
    }
}
