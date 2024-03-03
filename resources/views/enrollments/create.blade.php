<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid ">
            <form action="{{ url('enrollments') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert" id="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="alert alert-success" role="alert" id="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="mb-5 row justify-content-center">
                    <div class="col-lg-12 col-12 ">
                        <div class="card " id="basic-info">
                            <div class="card-header">
                                <h5>Basic Info</h5>
                            </div>
                            <div class="pt-0 card-body">
                                <div class="row p-2">
                                    <div class="col-md-4">
                                        <label for="customer" class="form-label">{{ __('Student') }}</label>
                                        <input type="hidden" id="student_id" name="student_id">
                                        <input required oninput="setStudentID()" class="form-control" list="customerdatalistOptions" id="student" placeholder="Type to search...">
                                        <datalist id="customerdatalistOptions">
                                            @foreach(getModelList('students') as $student)
                                            <option value="{{$student->name()}}" data-value="{{$student->id}}">
                                            @endforeach
                                        </datalist>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">First name</label>
                                        <input type="text" name="first_name" id="first_name"
                                            value="{{ old('first_name', '') }}" class="form-control">
                                        @error('first_name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="middle_name">Middle name</label>
                                        <input type="text" name="middle_name" id="middle_name"
                                            value="{{ old('middle_name', '') }}" class="form-control">
                                        @error('middle_name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="last_name">Last name</label>
                                        <input type="text" name="last_name" id="last_name"
                                            value="{{ old('last_name', '') }}" class="form-control">
                                        @error('last_name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">Phone Number</label>
                                        <input type="text" name="phone" id="phone"
                                            value="{{ old('phone', '') }}" class="form-control">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="middle_name">Date of Birth</label>
                                        <input type="date" name="date_of_birth" id="date_of_birth" class="form-control">
                                        @error('date_of_birth')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="name">Gender</label>
                                        <select name="gender" class="form-control">
                                            <option value="Female">Female</option>
                                            <option value="Female">Male</option>
                                        </select>
                                        @error('gender')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                
                                <div class="row">
                                    <div class="col-6">
                                        <label for="name">Course</label>
                                        <select name="course_id" id="course" class="form-control">
                                            <option value="">--Select course--</option>
                                            @foreach(getModelList('courses') as $course)
                                            <option value="{{$course->id}}">{{$course->name.' (₦'.$course->cost.')'}}</option>
                                            @endforeach
                                        </select>
                                        @error('location')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="col-6">
                                        <label for="middle_name">Session</label>
                                        <select name="academic_session_id" id="academic_session" class="form-control">
                                        </select>
                                        @error('academic_session')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Save
                                    changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <x-app.footer />
        </div>
    </main>

</x-app-layout>
<script>
window.addEventListener('load', function() {
    $('#course').change(function() {
    var course_id = $("#course").val();
    $("#academic_session").empty();
    let url = "{{url('/course-upcoming-sessions/')}}";
    if(course_id != ''){
        $.get(url, {course_id: course_id}, function(data,status){
            if(data.length < 1){
                alert('No available courses.')
            }
            jQuery.each(data, function(index, session){
                    $("#academic_session").append("<option value='"+session.id+"'>Start date "+session.start_date+"</option>");
                });
        });
    }
    
});
});

function setStudentID(){
    var value = $('#student').val();
    $('#student_id').val($('#customerdatalistOptions [value="' + value + '"]').data('value'));
    var id = $('#student_id').val();
    $.ajax({
        url: "{{ url('/student-details') }}",
        type: "GET",
        data: {student_id: id},
        success: function(data) {
                // Do stuff when the AJAX call returns
                //like refresh the basket
                //alert(data.first_name);
                //console.log(data);
                $('#first_name').val(data.first_name);
                $('#middle_name').val(data.middle_name);
                $('#last_name').val(data.last_name);
                $('#date_of_birth').val(data.date_of_birth);
                $('#phone').val(data.phone);
            }
    })
}
</script>
