<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    //
    public function index($section = 'content-a')
    {
        // Default to 'content-a' if no section is provided
       return view('dashboard', ['section' => $section]);
    }

}
