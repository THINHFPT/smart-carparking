<?php

namespace App\Http\Controllers\Parking;

use App\Http\Controllers\Controller;
use App\Models\packing\ParkingManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ParkingController extends Controller
{

    public function  index (){
        $id = Auth::guard('parking')->user()->id;
        $datas = DB::table('parking_homes')->where('parking_manager_id','=',$id)->get();
        return view('nhaxe.home',compact('datas'));
    }

    public function  createUser(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cf_password' => 'required|min:5|max:30|same:password'
        ]);
        $parkingManager = new ParkingManager();
        $parkingManager->name = $request->name;
        $parkingManager->email = $request->email;
        $parkingManager->password = Hash::make($request->password);
        $save = $parkingManager->save();
        if ($save) {
            return redirect()->route('parking.login');
        } else {
            return redirect()->back()->with('fail', 'Something went strong, failed to register');
        }
    }

    public function checkUser(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $creds = $request->only('email','password');
        if(Auth::guard('parking')->attempt($creds)) {
            return redirect()->route('parking.home');
        }else{
            return redirect()->route('parking.login')->with('fail','Incorrect credentials');
        }
    }

    public function  logout(){
        Auth::guard('parking')->logout();
        return redirect()->route('parking.login');
    }

    public function listDriver($id){
      $datas=   DB::table('parking_homes')
            ->join('parking_slots','parking_homes.id','=','parking_slots.parking_home_id')
            ->join('drivers', 'parking_slots.driver_id', '=', 'drivers.id')
            ->where('parking_slots.parking_home_id','=',$id)
            ->select('*')
            ->get();
      return view('nhaxe.listDriver', compact('datas'));
    }
}
