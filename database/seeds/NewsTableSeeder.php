<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'title' => Str::random(10),
            'description' => Str::random(100),
            'summary' => Str::random(50),
        ]);

        DB::table('news')->insert([
            'title' => Str::random(10),
            'description' => Str::random(100),
            'summary' => Str::random(50),
        ]);
    }
}
