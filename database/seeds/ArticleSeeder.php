<?php
use Faker\Generator as Faker;
use App\Articles;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
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
            $article = new Articles();
            $article->author = $faker->name();
            $article->title = $faker->word();
            $article->body = $faker->text();
            $article->save();
        }
    }
}
