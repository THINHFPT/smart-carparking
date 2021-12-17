<?php

namespace App\Models\packing;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingHome extends Model
{
    use HasFactory;
    protected $table = 'parking_homes';
    protected $fillable=[
        'address',
        'sdt',
        'price',
        'area',
        'start_time',
        'end_time',
        'max_panking_slot',
        'parking_manager_id'
    ];
}
