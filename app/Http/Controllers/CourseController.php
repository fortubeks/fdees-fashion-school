<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(Course $model)
    {
        return view('courses.index', ['courses' => $model->paginate(15)]);
    }

    public function create()
    {
        return view('courses/create');
    }

    public function store(Request $request)
    {
        $course = Course::create($request->all());
        return redirect('courses')->with('status','Course added successfully');
    }

    public function show(Course $course)
    {
        return view('courses.show')->with(compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $course->update($request->all());
        return redirect('courses/'.$course->id)->with('success','Course updated successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect('courses')->with('status','Course was deleted successfully');
    }
}
