<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ["Books"=>"BKS", "Movies"=>"MVS", "Games"=>"GMS",
            "Electronics"=>"ELS", "Health"=>"HLT", "Clothing"=>"CLT"];
        foreach ($categories as $key => $value) {
            \App\Category::create([
                'name' => $key,
                'image'=> $value.".jpg",
                'code' => $value,
            ]);
        }
    }
}
