<?php
use Faker\Generator as Faker;
use App\Categories;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
            $category = new Categories();
            $category->category = $faker->word();
            $category->save();
        }
    }
}
