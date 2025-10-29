<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SponsorController extends Controller
{
    //index
    public function index()
    {
        return view('public.sponsor.index');
    }
}
