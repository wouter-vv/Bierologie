<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // call seeders in right order
        $this->call(RolesTableSeeder::class);
        $this->call(BreweriesTableSeeder::class);

        $this->call(UsersTableSeeder::class);
        $this->call(BeersTableSeeder::class);

        $this->call(RatingsTableSeeder::class);
    }
}
