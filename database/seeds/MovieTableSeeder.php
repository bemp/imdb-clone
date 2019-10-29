<?php
 
use Carbon\Carbon;
use Illuminate\Database\Seeder;
 
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('id_ID');
 
        foreach (range(1, 50) as $loop) {
            DB::table('movies')->insert([
                'title'      => $faker->words(2, true),
                'description'    => $faker->paragraph(2, true),
                'release_year' => mt_rand(1950, 2019),
                'cover_image' => $faker->imageUrl(640, 480),
                'genre_id' => mt_rand(1, 5),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}