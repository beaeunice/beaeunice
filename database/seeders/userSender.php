<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class userSender extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        DB::table('bec_users') ->insert([
            'full_name' => $faker->name(),
            'email' => $faker ->email(),
            'uname' => $faker ->username(),
            'pword' => 'qwert123',
            'date_modified' => date('Y-m-d'),
            'date_created' => date('Y-m-d')

        ]); 
    }
}
