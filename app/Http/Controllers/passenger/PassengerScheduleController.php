<?php

namespace App\Http\Controllers\passenger;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class PassengerScheduleController extends Controller
{
    public function index(){
        $schedules = Schedule::all();
        return view('Passenger.schedule.schedule')->with('schedules', $schedules);
    }

    public function showSchedule($schedulesId){

        $schedules = Schedule::findOrFail($schedulesId);
        $schedule = $schedules->schedule;
    
        return view('admin.schedule.showSchedule', compact('schedules', 'schedule'));
    }
}
