<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

// Import the Student model at the top

class StudentController extends Controller
{

    public function index()
    {
        return view('pages.student.index');
    }

    /**
     * Display the directory page with student data.
     */
    public function directory()
    {
        // Fetch students ordered by the creation date, newest first
        $students = Student::orderBy('created_at', 'desc')->get();
        $totalStudents = Student::count();

        return view('pages.student.directory', compact('students', 'totalStudents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Generate a unique student number
        $studentNumber = $this->generateUniqueStudentNumber();

        // Create the student record
        $student = Student::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'mobile_number' => $request->mobile_number,
            'email' => $request->email,
            'address' => $request->address,
            'acadprog_id' => $request->acadprog_id, // Changed to match the dropdown name attribute
            'year_level' => $request->year_level,
            'student_number' => $studentNumber,
            // ... other fields ...
        ]);

        // Validation and saving logic

        \Log::info("Adding new student: " . $student->id);

        return redirect()->route('student.directory')->with('success', 'Student added successfully.');
    }

    /**
     * Generate a unique student number.
     *
     * Implement the logic to generate a unique 10-digit student number.
     *
     * @return string
     */
    private function generateUniqueStudentNumber()
    {
        // Implement the logic to generate and check for a unique student number
        // Example (basic implementation):
        do {
            $number = mt_rand(1000000000, 9999999999); // Generate a random 10-digit number
        } while (Student::where('student_number', $number)->exists());

        return (string) $number;
    }
    public function showDirectory()
    {
        $students = Student::all(); // Fetch all students from the database
        return view('pages.student.directory', compact('students')); // Pass the students to the view
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $student = Student::find($id, [
            'student_number',
            'first_name',
            'last_name',
            'mobile_number',
            'email',
            'address',
            'acadprog_id',
            'year_level',
        ]);

        if ($student) {
            return response()->json($student);
        } else {
            return response()->json(['message' => 'Student not found'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view('pages.student.update', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        // Assuming you want to allow partial updates without validating every field
        $student->update($request->only([
            'first_name',
            'last_name',
            'mobile_number',
            'email',
            'address',
            'acadprog_id',
            'year_level',
        ]));

        // Redirect after update
        return redirect()->route('student.directory')->with('success', 'Student record updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        \Log::info("Deleting student: " . $student->id);

        $student->delete();
        return redirect()->route('student.directory')->with('success', 'Student deleted successfully.');
    }

}
