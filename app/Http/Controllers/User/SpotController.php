<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\ParkingHome;
use App\Models\User\ParkingSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpotController extends Controller
{
    public function showParkingHome()
    {
        $shows = ParkingHome::query()->paginate(15);
        return view('user.slot', compact('shows'));
    }

    public function bookCart(Request $request, $id)
    {
        $data = ParkingHome::where('id', '=', $id)->first();
        return view('user.bookCart', compact('data'));
    }

    public function createSpot(Request $request)
    {
        $request->validate([
            'parking_home_id' => 'required',
            'driver_id' => 'required',
            'time' => 'required',
            'sdt'=>'required',
            'tecktime' => 'required',
            'vehicle' => 'required'
        ]);
        $data = $request->all();
      //  dd($data);
        ParkingSlot::create($data);
        return redirect()->route('user.home');
    }


}
