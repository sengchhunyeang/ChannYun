<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'student_name' => 'required|string|max:255',
            'latin_name' => 'required|string|max:255',
            'phone_number' => 'required|string|max:15',
            'gender' => 'required|in:M,F',
            'english_level' => 'required|string',
            'khmer_level' => 'required|string',
            'register_date' => 'nullable|date',
            'joining_date' => 'required|date',
            'dob' => 'required|date',
            'current_address' => 'required|string',
            'father_name' => 'required|string|max:255',
            'father_job' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
            'mother_job' => 'required|string|max:255',
            'student_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the photo upload if exists
        if ($request->hasFile('student_photo')) {
            $validatedData['student_photo'] = $request->file('student_photo')->store('photos', 'public');
        }

        // Create a new student record
        Student::create($validatedData);

        return redirect()->route('dashboard')->with('success', 'Student registered successfully!');
    }
}