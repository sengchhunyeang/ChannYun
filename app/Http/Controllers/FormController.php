<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        // Handle form data logic
        return view('partials.form_data');
    }

}
