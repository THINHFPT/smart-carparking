<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DriverSeeder extends Seeder
{
    public function run()
    {
        DB::table('drivers')->insert([
            'name'=> 'Văn Đồng',
            'email'=> Str::random(7).'@gmail.com',
            'password' => Hash::make('1234567')
        ]);
    }
}
