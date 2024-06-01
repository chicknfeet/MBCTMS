<?php

namespace App\Http\Controllers\passenger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassengerBusInfoController extends Controller
{
    public function index(){
        return view('passenger.businfo.businfo');
    }
}
