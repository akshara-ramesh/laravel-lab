<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // Display all students
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    // Display the form to create a student
    public function create()
    {
        return view('students.create');
    }

    // Save a new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'roll_no' => 'required|unique:students,roll_no',
            'name' => 'required',
            'email' => 'required|email|unique:students,email',
            'department' => 'required',
            'semester' => 'required|integer',
            'cgpa' => 'nullable|numeric'
        ]);

        Student::create($validated);

        return redirect()->route('students.index')
                         ->with('status', 'Student added successfully!');
    }
    

    // Display a particular student
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    
}