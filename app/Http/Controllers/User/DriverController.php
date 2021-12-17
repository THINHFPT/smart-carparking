<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\admin\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DriverController extends Controller
{
    public  function  register(){
        return view('user.register');
    }
    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'cf_password' => 'required|min:5|max:30|same:password'
        ]);

        $driver = new Driver();
        $driver->name = $request->name;
        $driver->email = $request->email;
        $driver->password = Hash::make($request->password);
        $save = $driver->save();
        if ($save) {
            return redirect()->route('user.login');
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

        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::guard()->attempt($data)) {
            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect credentials');
        }
    }

    public function home(Request $request)
    {
//        $data = array();
//        if (Session::has('userId')) {
//            $data = Driver::where('id', '=', Session::get('userId'))->first();
//        }
        return view('user.home');
    }

    public function logout(){
        Auth::guard()->logout();
        return redirect()->route('user.login');
    }

}
