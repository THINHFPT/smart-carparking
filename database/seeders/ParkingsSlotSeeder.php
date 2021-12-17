<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParkingsSlotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parking_spots')->insert([
            'parking_home_id'=>5,
            'driver_id'=>4,
            'time'=>'8:30',
            'tecktime'=>'9:50',
            'vehicle'=>'xe may'
        ]);
    }
}
