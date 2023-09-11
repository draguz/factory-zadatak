<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Str;

use Faker\Factory as Faker;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $i = 1;
        foreach (range(1,50) as $value){
           
            DB::table('ingredients')->insert([
                'title' => $faker->word(),
                'slug' => 'ingredient-'.$i,
            ]);
            $i++;
        }
    }
}
