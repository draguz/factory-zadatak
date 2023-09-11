<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Str;

use Faker\Factory as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $i = 1;
        foreach (range(1,6) as $value){
            
            DB::table('categories')->insert([
                'title' => $faker->word(),
                'slug' => 'category-'.$i,
            ]);
            $i++;
        }
    }
}
