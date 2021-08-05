<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Kharisma Naufal Pane',
            'email' => 'kharisma.naufal@binus.ac.id',
            'phone' => '0877887718866',
            'role' => 'Member',
            'password' => '12345678'
        ]);
    }
}
