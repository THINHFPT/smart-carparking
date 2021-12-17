<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ParkingSlot extends Model
{
    use  HasFactory;

 public $fillable = [
        'parking_home_id',
        'driver_id',
        'time',
        'sdt',
        'tecktime',
        'vehicle'
    ];
}
