<?php


namespace App\Http\Controllers;
use App\Models\Student; // This is the correct import statement
use Illuminate\Http\Request;
use Illuminate\View\ViewName;
class StudentController extends Controller
{
    
    public function index()
    {
        
       
        // Fetch paginated students (e.g., 10 students per page)
        $students = Student::paginate(10);
    
        // Pass the data to the view
        return view('dashboard', compact('students'));
    }
    
    public function store(Request $request)
    {
        $student = Student::create($request->all()); // Using the Student model
        return response()->json($student, 201);
    }

    public function destroy($id)
    {
        try {
            // Find the student by ID
            $student = Student::findOrFail($id);
    
            // Delete the student
            $student->delete();
    
            // Return a JSON response
            return response()->json(['success' => true]);
        } catch (\Exception $e) {
            // Log the error
    
            // Return an error response
            return response()->json(['success' => false, 'message' => $e->getMessage()], 500);
        }
    }
}
