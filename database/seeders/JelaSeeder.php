<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

use Illuminate\Support\Facades\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JelaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $categories = Category::all();
        
        foreach (range(1,10) as $value){
            DB::table('meals')->insert([
                'naziv' => $faker->word(),
                'category_id' => $categories->random()->id,
                'status' => true,
                'created_at' => $faker->dateTimeBetween("-1 day" , now()),
                'updated_at' => $faker->dateTimeBetween("-1 day" , now())
            ]);
        }
    }
}
