<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentEnrollRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Models\Course;
use App\Models\Enrollment;
use App\Models\StudentPayment;
use App\Models\User;
use App\Notifications\NewEnrollment;
use App\Notifications\StudentEnrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function index(Enrollment $model)
    {
        return view('enrollments.index', ['enrollments' => $model->orderBy('created_at','ASC')->paginate(15)]);
    }

    public function create()
    {
        return view('enrollments/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'course_id' => 'required',
            'academic_session_id' => 'required',
        ]);
    
        // Check if the enrollment already exists
        $existingEnrollment = Enrollment::where('student_id', $request->student_id)
            ->where('course_id', $request->course_id)
            ->where('academic_session_id', $request->academic_session_id)
            ->exists();
    
        if ($existingEnrollment) {
            session()->flash('error','Student is already enrolled in this course for the specified academic session');
            return redirect('enrollments');
        }
    
        // Create the new enrollment
        Enrollment::create($request->all());
        session()->flash('success','Enrollment added successfully');
        return redirect('enrollments')->with('status','Enrollment added successfully');
    }

    public function show(Enrollment $enrollment)
    {
        //$enrollment_payments = $enrollment->payments()->orderBy('created_at','desc')->paginate(15);
        return view('enrollments.show')->with(compact('enrollment'));
    }

    public function update(Request $request, Enrollment $enrollment)
    {
        $enrollment->update($request->all());
        return redirect('enrollments/'.$enrollment->id)->with('status','Enrollment updated successfully');
    }

    public function updateEnrollmentPaymentStatus($enrollment_id){
        $enrollment = Enrollment::find($enrollment_id);
        if($enrollment){
            //add record to student payment if it does not exist
            if(!$enrollment->payment){
                StudentPayment::create([
                    'student_id' => $enrollment->student->id,
                    'enrollment_id' => $enrollment->id,
                    'amount' => $enrollment->course->cost,
                ]);
                
            }
            session()->flash('success','Payment recorded and enrollment updated');
            return redirect('enrollments/');
        }
        session()->flash('error','Enrollment not found');
        return redirect('enrollments/');
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

        //session()->pull('student');

        session()->flash('success','You have been enrolled successfully. You are now in '.$enrollment->status.'list. Now make payment to secure your spot');
        return redirect('registration-payment');

        // Return success message
        //return response()->json(['message' => 'Student enrolled successfully.']);
    }
}
