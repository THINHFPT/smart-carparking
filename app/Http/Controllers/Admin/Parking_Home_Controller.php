<?php

namespace App\Http\Controllers\Admin;
;

use App\Http\Controllers\Controller;
use App\Models\admin\ParkingHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parking_Home_Controller extends Controller
{
    public function index()
    {
        $parking_homes = ParkingHome::query()->paginate(5);
        return view('admin.parking_homes.index', compact('parking_homes'));
    }

    public function create()
    {
        return view('admin.parking_homes.create');
    }

    public function store(Request $request)
    {
        ParkingHome::create($request->all());
        return redirect()->route('admin.parking_homes.index');
    }

    public function edit(ParkingHome $parking_home)
    {
        return view('admin.parking_homes.edit', compact('parking_home'));
    }

    public function show($parking_home)
    {
        $datas = DB::table('parking_slots')
            ->join('parking_homes', 'parking_homes.id', '=', 'parking_slots.parking_home_id')
            ->join('drivers', 'parking_slots.driver_id', '=', 'drivers.id')
            ->where('parking_slots.parking_home_id', '=', $parking_home)
            ->select('*')
            ->get();
        return view('admin.parking_homes.show', compact('datas'));
    }

    public function update(ParkingHome $parking_Home, Request $request)
    {
//        $request->validate([
//            'address' => 'required',
//            'erea_code' => 'required',
//            'blank' => 'required',
//            'parking_manager_id' => 'required'
//        ]);
        $parking_Home->update($request->all());
        return redirect()->route('parking_homes.index');
    }

    public function destroy(ParkingHome $parking_Home)
    {
        $parking_Home->delete();
        return redirect()->route('parking_homes.index');
    }
}
