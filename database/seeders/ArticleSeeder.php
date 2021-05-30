<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 5; $i++)
        {
            $user = User::find(5);
            $categorie = Categorie::find(1);

            $article = new Article([
                'titre' => $faker->sentence(5),
                'contenu' => $faker->sentences(6, true)
            ]);

            $article->user()->associate($user);
            $article->categorie()->associate($categorie);

            $article->save();
        }
    }
}
