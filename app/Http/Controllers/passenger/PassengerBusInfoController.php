<?php

namespace App\Http\Controllers\passenger;
use App\Models\Driver;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassengerBusInfoController extends Controller
{
    public function index(){
        $drivers = Driver::all();
        return view('passenger.businfo.businfo')->with('drivers', $drivers);
    }

    public function showDriver($driversId){

        $drivers = Driver::findOrFail($driversId);
        $driver = $drivers->driver;
    
        return view('passenger.businfo.businfo', compact('drivers', 'driver'));
    }
}
