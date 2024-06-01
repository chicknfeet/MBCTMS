<?php

namespace App\Http\Controllers\passenger;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PassengerScheduleController extends Controller
{
    public function index(){
        return view('passenger.schedule.schedule');
    }
}
