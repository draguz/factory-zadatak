<?php

namespace Database\Seeders;

use App\Models\Jelo;
use App\Models\Category;
use App\Models\Ingredient;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

use Illuminate\Support\Facades\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JelaIngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $ingredients = Ingredient::all();
        $jela = Jelo::all();

        for ($i=1; $i<=10; $i++){
            $r = rand(1,5);
            for($j=1; $j<=$r; $j++){
                DB::table('meals_ingredients')->insert([  
                    'meal_id' => $i,
                    'ingredient_id' => $ingredients->random()->id
                ]);
            }
        }
    }
}
