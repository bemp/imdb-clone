<?php

use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    { 
        $genres = ['drama','comedy','thriller','crime','fantasy','action','horor','western'];
        foreach($genres as $genre){
            DB::table('genres')->insert([
                'name'      => $genre
            ]);
        }
    }     
}