<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function index()
    {
        // Fetch all students
        $students = Student::all();

        // Return the data to a view
        return view('students.index', compact('students'));
    }

    public function show($id)
    {
        // Fetch a single student by ID
        $student = Student::find($id);

        // Return the data to a view
        return view('students.show', compact('student'));
    }
    use HasFactory;

    protected $fillable = [
        'student_name', 'latin_name', 'phone_number', 'gender',
        'english_level', 'khmer_level', 'register_date', 'joining_date',
        'dob', 'current_address', 'father_name', 'father_job',
        'mother_name', 'mother_job', 'student_photo'
    ];
}
