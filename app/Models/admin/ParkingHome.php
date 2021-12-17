<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingHome extends Model
{
    use HasFactory;
    protected $table='parking_homes';

    public  $fillable=[
        'address',
        'erea_code',
        'start_time',
        'price',
        'end_time',
        'desc',
        'blank',
        'max_panking_slot',
        'parking_manager_id'
    ];



}
