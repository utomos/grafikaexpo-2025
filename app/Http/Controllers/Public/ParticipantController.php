<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{
    //index
    public function index()
    {
        return view('public.participants.index');
    }

    //detail
    public function detail($slug)
    {
        return view('public.participants.detail', compact('slug'));
    }
}
