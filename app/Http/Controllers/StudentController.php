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

    public function show(String $id){
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit(Student $student){
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student){
        $data = $request->validate([
            'nama' => 'required',
            'nim' => 'required|numeric',
            'jenis_kelamin' => 'required',
        ]);

        $student->update($data);
        
        return redirect()->route('student-list')->with('success', 'Data mahasiswa berhasil diubah');
    }

    public function destroy(Student $student){

        $student->delete();
        
        return redirect()->route('student-list')->with('success', 'Data mahasiswa berhasil dihapus');
    }
}
    
