<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    function action(Request $request)
    {
        $query = $request->input('query');
        if($query ==''){
            return response()->json([

            ]);
        }else{
            $homes = DB::table('parking_homes')->where('address','like', '%'.$query.'%')->get();
            return response()->json([
                'homes'=> $homes
            ]);
        }
    }
}
