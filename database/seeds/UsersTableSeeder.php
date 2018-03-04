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
            'name' => 'Seeded employer',
            'email' => 'employer@amazonite.co',
            'password' => bcrypt('secret'),
            'type' => 'employer',
        ]);
    }
}
