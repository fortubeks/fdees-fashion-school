<x-guest-layout>

    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
                <x-website.sidenav-guest />
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
    <div class="px-5 py-7 container-fluid ">
            <form action="{{ url('student-enroll') }}" method="POST">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg-9 col-12">
                    @if (session('errors'))
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert" id="alert">
                            {{ $error }}
                        </div>
                    @endforeach
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
                                <h5>Registration Form</h5>
                            </div>
                            <div class="pt-0 card-body">
                                <h4 class="">{{session('student')['first_name']}}</h4>
                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">Course</label>
                                        <select name="course_id" id="course" class="form-control">
                                            <option value="">--Select course--</option>
                                            @foreach(getModelList('courses') as $course)
                                            <option value="{{$course->id}}">{{$course->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('course')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="middle_name">Session</label>
                                        <select name="academic_session_id" id="academic_session" class="form-control">
                                        </select>
                                        @error('academic_session')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                </div>
                                
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Proceed to payment</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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
                alert('No available courses. Call School Admin on +234 809 9019 989')
            }
            jQuery.each(data, function(index, session){
                    $("#academic_session").append("<option value='"+session.id+"'>Start date "+session.start_date+"</option>");
                });
        });
    }
    
});


});


</script>
