<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function about(){
        return view("students.about");
    }

    public function create(){
        return view('students.create');
    }

    public function store(Request $request){
        $student = $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'jenis_kelamin' => 'required',
        ]);

        Student::create($student);
        return redirect()->route('student-list')->with('success', 'Data mahasiswa berhasil ditambah');
    }
}
    
