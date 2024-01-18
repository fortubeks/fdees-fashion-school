<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentStoreRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Student $model)
    {
        return view('students.index', ['students' => $model->paginate(15)]);
    }

    public function create()
    {
        return view('students/create');
    }

    public function store(StudentStoreRequest $request)
    {
        $student = Student::create($request->all());
        if(!auth()){
            session()->put('student',$student);
            return redirect('student-enroll')->with('status','Student details saved successfully');
        }
        return redirect('students')->with('status','Student added successfully');
    }

    public function show(Student $student)
    {
        $student_payments = $student->payments()->orderBy('created_at','desc')->paginate(15);
        return view('students.show')->with(compact('student','student_payments'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect('students/'.$student->id)->with('success','Student updated successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students')->with('status','Student was deleted successfully');
    }

    public function registerStudent(StudentStoreRequest $request)
    {
        $student = Student::create($request->all());
        session()->put('student',$student);
        return redirect('student-enroll')->with('status','Student details saved successfully');
    }
}
