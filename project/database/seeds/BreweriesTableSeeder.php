<?php

use Illuminate\Database\Seeder;

class BreweriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Van Steenberge',
            'website' => 'www.vansteenberge.com',
            'location' => 'Ertvelde',
            'foundingyear' => '1784',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Westmalle',
            'website' => 'www.trappistwestmalle.be/',
            'location' => 'Westmalle',
            'foundingyear' => '1879',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Affligem',
            'website' => 'www.affligembeer.com',
            'location' => 'Affligem',
            'foundingyear' => '1580',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Brouwerij Huyghe',
            'website' => 'www.delirium.be',
            'location' => 'Melle',
            'foundingyear' => '1906',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Abdij van Maredsous',
            'website' => 'http://www.maredsousbieres.be/',
            'location' => 'Maredsous',
            'foundingyear' => '1732',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'name' => 'Chimay',
            'website' => 'www.chimay.com',
            'location' => 'Ertvelde',
            'foundingyear' => '1784',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
