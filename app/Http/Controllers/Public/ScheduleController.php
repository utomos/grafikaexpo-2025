<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //index
    public function index()
    {
        return view('public.schedule.index');
    }
}
