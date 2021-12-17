<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParkingManager extends Model
{
    use HasFactory;

    protected $table = 'parking_managers';

    public  $fillable=[
        'name',
        'email',
        'sdt',
    ];

//    public function parking()
//    {
//        return $this->hasMany(ParkingHome::class, 'parking_manager_id');
//    }


}
