<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    //index
    public function index()
    {
        return view('public.registration.index');
    }

    // confirmation
    public function confirmation()
    {
        return view('public.registration.confirmation');
    }

    //submit
    public function submit(Request $request)
    {

    }
}
