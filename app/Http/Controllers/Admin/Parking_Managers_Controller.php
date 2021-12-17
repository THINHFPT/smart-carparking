<?php

namespace App\Http\Controllers\Admin;

use App\Models\admin\ParkingManager;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Parking_Managers_Controller extends Controller
{
    public function index()
    {
        $parking_managers = ParkingManager::query()->paginate(5);
        return view('admin.parking_managers.index', compact('parking_managers'));
    }

    public function create()
    {
        return view('admin.parking_managers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'sdt' => 'required',
            'password' => 'required'
        ]);
        ParkingManager::create($request->all());
        return redirect()->route('admin.parking_managers.index');
    }

    public function edit(ParkingManager $parking_manager)
    {
        return view('admin.parking_managers.edit', compact('parking_manager'));
    }

//    public function show(ParkingManager $parking_manager)
//    {
//        $data = ParkingManager::with('parking')->first();
//        return view('Admin.parking_managers.show', compact('data'));
//    }

    public function show( $parking_manager)
    {

        $datas = DB::table('parking_homes')
            ->join('parking_managers', 'parking_homes.parking_manager_id' , '=','parking_managers.id')
            ->where('parking_managers.id', '=',$parking_manager)
            ->select('*')
            ->get();

     return view('admin.parking_managers.show', compact('datas'));
    }

    public function update(Request $request, ParkingManager $parking_Managers)
    {
        $request->validate([
            'name' => 'required',
            'sdt' => 'required',
            'password' => 'required'
        ]);
        $parking_Managers->update($request->all());
        return redirect()->route('admin.parking_managers.index');
    }

    public function destroy(ParkingManager $parking_Managers)
    {
        $parking_Managers->delete();
        return redirect()->route('parking_managers.index');
    }
}
