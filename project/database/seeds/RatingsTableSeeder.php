<?php

use Illuminate\Database\Seeder;

class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratings')->insert([
            'user_id' => 1,
            'beer_id' => 1,
            'score' => 4,
            'comment' => "goed biertje"
        ]);
        DB::table('ratings')->insert([
            'user_id' => 1,
            'beer_id' => 3,
            'score' => 4,
            'comment' => "lekker"
        ]);
        DB::table('ratings')->insert([
            'user_id' => 1,
            'beer_id' => 7,
            'score' => 1,
            'comment' => "eikes"
        ]);
        DB::table('ratings')->insert([
            'user_id' => 3,
            'beer_id' => 7,
            'score' => 5,
            'comment' => "kei goed"
        ]);
    }
}
