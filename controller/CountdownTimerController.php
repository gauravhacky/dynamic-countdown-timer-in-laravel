<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\CountdownTimer;

class CountdownTimerController extends Controller
{

    public function create(){
        return view('timer.create');
    }

    public function update(Request $request)
    {
        $timer_id ='1';
        $timer = CountdownTimer::findOrNew($timer_id);
        $timer->launch_date = $request->date_time;
        $timer->status = $request->timer_status;
        $timer->save();
        dd('Timer has been updated successfully!');
    }

    public function view(){
        $timer = CountdownTimer::first();
        return view('timer.view',compact('timer'));
    }
}



