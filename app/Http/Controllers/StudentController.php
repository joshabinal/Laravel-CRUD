<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Show all students
    public function index() {
        return view('students.index', [
            'heading' => "Students",
            'students' => Student::latest()->get(),
        ]);
    }

    // Show create student form
    public function create() {
        return view('students.create', [
            'heading' => 'Create Students'
        ]);
    }

    // Insert student to DB
    public function store() {
        $formFields = request()->validate([
            'name' => 'required',
            'section' => 'required',
            'email' => ['required', 'email']
        ]);

        Student::create($formFields);

        return redirect('/')->with('message', 'Student created successfully!');
    }

    // Show edit student form
    public function edit(Student $student) {
        return view('students.edit', [
            'heading' => "Edit Student",
            'student' => $student
        ]);
    }

    // Update student to DB
    public function update(Student $student) {
        $formFields = request()->validate([
            'name' => 'required',
            'section' => 'required',
            'email' => ['required', 'email']
        ]);

        $student->update($formFields);

        return redirect('/')->with('message', 'Student updated successfully!');
    }

    public function destroy(Student $student) {
        $student->delete();
        return redirect('/')->with('message', 'Student deleted successfully!');
    }
}
