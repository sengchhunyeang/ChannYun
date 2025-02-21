<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Student::create([
            'student_name' => 'John Doe',
            'latin_name' => 'John',
            'phone_number' => '123456789',
            'gender' => 'M',
            'english_level' => 'Intermediate',
            'khmer_level' => 'Native',
            'register_date' => now(),
            'joining_date' => now(),
            'dob' => '2000-01-01',
            'current_address' => '123 Main St',
            'father_name' => 'John Doe Sr.',
            'father_job' => 'Engineer',
            'mother_name' => 'Jane Doe',
            'mother_job' => 'Teacher',
            'student_photo' => null,
        ]);
    }
}
