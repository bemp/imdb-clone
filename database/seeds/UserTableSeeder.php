<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('users')->insert([
                'username'      => 'admin',
                'password'    => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', //secret
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
    }
}