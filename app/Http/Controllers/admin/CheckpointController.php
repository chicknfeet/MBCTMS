<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\Checkpoint;
use Illuminate\Http\Request;

class CheckpointController extends Controller
{      
    public function index(){
        $checkpoints = Checkpoint::all();
        return view('admin.checkpoint.checkpoint')->with('checkpoints', $checkpoints);
    }
    public function showDriver($checkpointsId){

        $checkpoints = Checkpoint::findOrFail($checkpointsId);
        $checkpoint = $checkpoints->checkpoint;
    
        return view('admin.checkpoint.checkpoint', compact('checkpoints', 'checkpoint'));
    }


}
