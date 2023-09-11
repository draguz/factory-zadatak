<?php

namespace Database\Seeders;

use App\Models\Tag;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Db;

use Illuminate\Support\Facades\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JelaTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $tags = Tag::all();
        for ($i=1; $i<=10; $i++){
            for($j=1; $j<=rand(1,5); $j++){
                DB::table('meals_tags')->insert([  
                    'meal_id' => $i,
                    'tag_id' =>$tags->random()->id
                ]);
            }
        }
    }
}
