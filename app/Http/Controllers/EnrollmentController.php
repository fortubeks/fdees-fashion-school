<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentEnrollRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\User;
use App\Notifications\NewEnrollment;
use App\Notifications\StudentEnrollment;
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

    public function update(Request $request, Enrollment $enrollment)
    {
        $enrollment->update($request->all());
        return redirect('enrollments/'.$enrollment->id)->with('status','Enrollment updated successfully');
    }

    public function destroy(Enrollment $enrollment)
    {
        $enrollment->delete();
        return redirect('enrollments')->with('status','Enrollment was deleted successfully');
    }

    public function showEnrollmentForm()
    {
        if(session('student')){
            return view('website.student.enroll');
        }
        else{
            return redirect('/student-register')->with('status','Register first');
        }
    }

    // Enroll Student
    public function enrollStudent(StudentEnrollRequest $request) {

        $course = Course::find($request->course_id);

        // Check if the course has reached its capacity
        if ($course->enrollments()->where('academic_session_id', $request->academic_session_id)->count() < $course->capacity) {
            // Enroll the student
            $status = 'enrolled';
        } else {
            // Put the student on the waiting list
            $status = 'waiting';
        }

        // Create or update enrollment record
        $enrollment = Enrollment::updateOrCreate(
            ['student_id' => $request->student_id, 'course_id' => $request->course_id, 'academic_session_id' => $request->academic_session_id,
            'status' => $status]
        );

        //Notify admin by mail
        $user = User::find(1);
        $user->notify(new NewEnrollment($enrollment));

        //notify student
        if($enrollment->student->email != ''){
            $enrollment->student->notify(new StudentEnrollment());
        }

        session()->pull('student');


        session()->flash('success','You have been enrolled successfully. You are now in '.$enrollment->status.'list. Now make payment to secure your spot');
        return redirect('registration-payment');

        // Return success message
        //return response()->json(['message' => 'Student enrolled successfully.']);
    }
}
