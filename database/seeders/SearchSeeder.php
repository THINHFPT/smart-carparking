<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SearchSeeder extends Seeder
{

    public function run()
    {
        DB::table('searchs')->insert([
           'address' => 'Hồ Tùng Mậu'
        ]);
    }
}
