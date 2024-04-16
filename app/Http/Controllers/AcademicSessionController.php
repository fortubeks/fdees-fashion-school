<?php

namespace App\Http\Controllers;

use App\Models\AcademicSession;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;

class AcademicSessionController extends Controller
{
    public function index(AcademicSession $model)
    {
        return view('academic-sessions.index', ['academic_sessions' => $model->orderBy('created_at','ASC')->paginate(15)]);
    }

    public function create()
    {
        return view('academic-sessions/create');
    }

    public function store(Request $request)
    {
        AcademicSession::create($request->all());
        return redirect('academic-sessions')->with('status','Academic Session added successfully');
    }

    public function show(AcademicSession $academic_session)
    {
        return view('academic-sessions.show')->with(compact('academic_session'));
    }

    public function update(Request $request, AcademicSession $academic_session)
    {
        $academic_session->update($request->all());
        return redirect('academic-sessions/'.$academic_session->id)->with('status','AcademicSession updated successfully');
    }

    public function destroy(AcademicSession $academic_session)
    {
        $academic_session->delete();
        return redirect('academic-sessions')->with('status','AcademicSession was deleted successfully');
    }

    public function courseUpcomingSessions(Request $request){
        $course = Course::find($request->course_id);
        $sessions = $course->academicSessions()->where('end_date', '>', now())->get();
        return $sessions;
    }

    public function addCourseToSession(Request $request){
        $validator = validator()->make($request->all(), [
            'course' => 'required|exists:courses,id',
            'academic_session_id' => [
                'required',
                'exists:academic_sessions,id',
                Rule::unique('academic_session_courses')->where(function ($query) use ($request) {
                    return $query->where('course_id', $request->input('course'));
                }),
            ],
        ]);
    
        // Check if the validation fails
        if ($validator->fails()) {
            return redirect('academic-sessions')->withErrors($validator)->withInput();
        }
        $course = Course::find($request->course);
        $session = AcademicSession::find($request->academic_session_id);

        // Attach the course to the session with additional data, if needed
        $course->academicSessions()->attach($session->id);

        session()->flash('success','Succesful');
        return redirect('academic-sessions');
    }
}
