<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentEnrollRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'course_id' => 'required|exists:courses,id',
            'academic_session_id' => 'required|exists:academic_sessions,id',
            'student_id' => ['required','exists:students,id',
                Rule::unique('enrollments')->where(function ($query) {
                    return $query
                        ->where('student_id', $this->input('student_id'))
                        ->where('course_id', $this->input('course_id'))
                        ->where('academic_session_id', $this->input('academic_session_id'));
                }),
            ],
        ];
    }
    public function prepareForValidation()
    {
        if(session('student')){
            $this->merge([
                'student_id' => session()->get('student')->id
            ]);
        }
        
    }

    public function messages()
    {
        return [
            'student_id.required' => 'The student ID is required.',
            'student_id.exists' => 'The selected student ID is invalid.',
            'course_id.required' => 'The course ID is required.',
            'course_id.exists' => 'The selected course ID is invalid.',
            'academic_session_id.required' => 'The session ID is required.',
            'academic_session_id.exists' => 'The selected session ID is invalid.',
            // Add custom messages for other rules as needed
        ];
    }
}
