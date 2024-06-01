<?php

namespace App\Http\Controllers\passenger;
use App\Http\Controllers\Controller;

use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PassengerAuthController extends Controller
{
    public function index(){
        return view('passenger.frontpagepassenger.login');
    }

    public function login(Request $request){
        $credentials = $request->only(['username','password']);

        if(Auth::attempt($credentials)){
            return redirect('/passenger/businfo');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function registration(){
        return view('passenger.frontpagepassenger.registration');
    }

    public function signup(Request $request){

        $validate = $request->validate([
            'name'=>'required|min:4|max:30',
            'username'=>'required|min:5|max:15',
            'password'=>'required|min:8|max:20' 
        ]);

        // Encrypt password
        $validate['password'] = Hash::make($validate['password']);

        $passenger = Passenger::create($validate);

        if($passenger){
            return redirect('/passenger/login');
        }
    }
}
