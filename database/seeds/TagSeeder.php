<?php

use Faker\Generator as Faker;
use App\Tags;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i=0; $i < 15 ; $i++) {
            $tag = new Tags();
            $tag->tag = $faker->word();
            $tag->save();
        }
    }
}
