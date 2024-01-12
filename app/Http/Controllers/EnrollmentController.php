<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index(Enrollment $model)
    {
        return view('enrollments.index', ['enrollments' => $model->orderBy('name','ASC')->paginate(15)]);
    }

    public function create()
    {
        return view('enrollments/create');
    }

    public function store(Request $request)
    {
        Enrollment::create($request->all());
        return redirect('enrollments')->with('status','Enrollment added successfully');
    }

    public function show(Enrollment $enrollment)
    {
        $enrollment_payments = $enrollment->payments()->orderBy('created_at','desc')->paginate(15);
        return view('enrollments.show')->with(compact('enrollments','enrollment_payments'));
    }

    public function update(Request $request, Customer $enrollment)
    {
        $enrollment->update($request->all());
        return redirect('enrollments/'.$enrollment->id)->with('status','Enrollment updated successfully');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect('enrollments')->with('status','Enrollment was deleted successfully');
    }
}
