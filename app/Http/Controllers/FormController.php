<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $formData = FormData::all(); // Fetch data from the database
        return view('form_data', compact('formData'));
    }

}
