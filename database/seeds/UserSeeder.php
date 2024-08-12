<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() : void
    {
        DB::table('users')->insert([
            'full_name' => 'Super Admin',
            'username' => 'admin',
            'password' => Hash::make('12341234'),
            'email' => 'admin@admin.com',
        ]);
    }
}
