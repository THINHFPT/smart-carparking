<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ParkingsHomeSeeder extends Seeder
{


    public function run()
    {
        DB::table('parking_homes')->insert([
            'address'=>'Số 77, Ngõ 913, Tổ 17, Hồ Tùng Mậu, Nam Từ Liêm',
            'start_time'=>'5:30',
            'end_time'=>'0:00',
            'sdt'=>Str::random(10),
            'area'=>'1000',
            'price'=>'5 000',
            'max_panking_slot'=>700,
            'parking_manager_id'=>4
        ]);
    }
}
