<?php

namespace App\Http\Controllers\Parking;

use App\Http\Controllers\Controller;
use App\Models\packing\ParkingHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ParkingHomeController extends Controller
{
    public function index(){

    }

    public function createParkingHome(Request $request){
        $request->validate([
            'parking_manager_id'=>'required',
            'apartment_number'=>'required',
            'alley'=>'required',
            'quarter'=>'required',
            'street_ward'=>'required',
            'district'=>'required',
            'area'=>'required',
            'max_panking_slot'=>'required',
            'price'=>'required',
            'sdt'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
        ]);
        $apartment_number = $request->apartment_number;
        $quarter = $request->quarter;
        $street_ward = $request->street_ward;
        $district = $request->district;
        $address = $apartment_number.", ".$quarter.", ".$street_ward.", ".$district;
        $data = [
            'address'=>$address,
            'area'=>$request->area,
            'max_panking_slot'=>$request->max_panking_slot,
            'price'=>$request->price,
            'sdt'=>$request->sdt,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'parking_manager_id'=>$request->parking_manager_id
        ];

        ParkingHome::create($data);
        return redirect()->route('parking.home');
    }

    public function editHome($id){
        $data = DB::table('parking_homes')->where('id','=',$id)->get()->first();
//        $address = $data->address;
        return view('nhaxe.editHome',compact('data'));
    }

    public function updateHome(Request $request,$id){
        $apartment_number = $request->apartment_number;
        $quarter = $request->quarter;
        $street_ward = $request->street_ward;
        $district = $request->district;
        $address = $apartment_number.", ".$quarter.", ".$street_ward.", ".$district;
        $data = [
            'address'=>$address,
            'area'=>$request->area,
            'max_panking_slot'=>$request->max_panking_slot,
            'price'=>$request->price,
            'sdt'=>$request->sdt,
            'start_time'=>$request->start_time,
            'end_time'=>$request->end_time,
            'parking_manager_id'=>$request->parking_manager_id
        ];
        $update =  DB::table('parking_homes')->where('id','=',$id)->update($data);
        if($update){
            return redirect()->route('parking.home');
        }else{
            echo "loi";
        }

    }
}
