<?php

use App\Models\Blog;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 20; $i++) {
            # code...
            $_post = new Blog();
            $_post->author = $faker->word();
            $_post->text = $faker->paragraph(1, true);
            $_post->date = $faker->date();
            $_post->save();
        }
    }
}
