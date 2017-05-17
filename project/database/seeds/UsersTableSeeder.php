<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Kevin',
            'lastname' => 'Picalausa',
            'email' => 'kevin.picalausa@odisee.be',
            'location' => 'Gent, Belgium',
            'password' => bcrypt('Azerty123'),
            'roles_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'Joris',
            'lastname' => 'Maervoet',
            'email' => 'joris.maervoet@odisee.be',
            'location' => 'Rupelmonde, Belgium',
            'password' => bcrypt('Azerty123'),
            'roles_id' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('users')->insert([
            'firstname' => 'user',
            'lastname' => 'user',
            'email' => 'user@odisee.be',
            'location' => 'Boom, Belgium',
            'password' => bcrypt('Azerty123'),
            'roles_id' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);
    }
}
