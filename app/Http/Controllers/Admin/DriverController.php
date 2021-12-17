<?php

namespace pp\Http\Controllers\Admin;

use App\Models\admin\Driver;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::query()->paginate(5);
        return view('admin.parking_homes.index', compact('drivers'));
    }

    public function create()
    {
        return view('admin.parking_homes.create');
    }

    public function store(Request $request)
    {
        Driver::create($request->all());
        return redirect()->route('admin.parking_homes.index');
    }

    public function edit(Driver $driver)
    {
        return view('admin.parking_homes.edit', compact('driver'));
    }

    public function update(Driver $driver, Request $request)
    {
        $request->validate([
            'address' => 'required',
            'erea_code' => 'required',
            'blank' => 'required',
            'parking_manager_id' => 'required'
        ]);
        $driver->update($request->all());
        return redirect()->route('admin.parking_homes.index');
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect()->route('parking_homes.index');
    }
}
