<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $model)
    {
        return view('students.index', ['students' => $model->orderBy('name','ASC')->paginate(15)]);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(Request $request)
    {
        Student::create($request->all());
        return redirect('students')->with('status','Student added successfully');
    }

    public function show(Student $student)
    {
        $student_payments = $student->payments()->orderBy('created_at','desc')->paginate(15);
        return view('students.show')->with(compact('students','student_payments'));
    }

    public function update(Request $request, Customer $student)
    {
        $student->update($request->all());
        return redirect('students/'.$student->id)->with('status','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students')->with('status','Student was deleted successfully');
    }
}
