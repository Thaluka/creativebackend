<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FollowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('followers')->insert([
            [
                'id' => '1',
                'email' => 'amal@gmail.com',
            ],
            [
                'id' => '2',
                'email' => 'nimal@gmail.com',
            ],
            [
                'id' => '3',
                'email' => 'kamal@gmail.com',
            ],
            [
                'id' => '4',
                'email' => 'amali@gmail.com',
            ],
            [
                'id' => '5',
                'email' => 'nimali@gmail.com',
            ],
            [
                'id' => '6',
                'email' => 'john@gmail.com',
            ],
            [
                'id' => '7',
                'email' => 'kate@gmail.com',
            ],
            [
                'id' => '8',
                'email' => 'wiliam@gmail.com',
            ],
            [
                'id' => '9',
                'email' => 'abdul@gmail.com',
            ],
            [
                'id' => '10',
                'email' => 'ahamad@gmail.com',
            ],
        ]);
    }
}
