<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Schedule;

class ScheduleController extends Controller
{
    
    public function index(){
        $schedules = Schedule::all();
        return view('admin.schedule.schedule')->with('schedules', $schedules);
    }

    public function showSchedule($schedulesId){

        $schedules = Schedule::findOrFail($schedulesId);
        $schedule = $schedules->schedule;
    
        return view('admin.schedule.showSchedule', compact('schedules', 'schedule'));
    }
}
