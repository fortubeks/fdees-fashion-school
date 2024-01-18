<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="container-fluid py-4 px-5">
            
            
            <div class="mb-5 row justify-content-center">
                <div class="col-lg-9 col-12 ">
                    <div class="card " id="basic-info">
                        <div class="card-header">
                            <h5>Basic Info</h5>
                        </div>
                        <div class="pt-0 card-body">

                            <div class="row">
                                <div class="col-6">
                                    <label for="name">Student Name</label>
                                    <input type="text" name="name" id="name"
                                        value="{{ $enrollment->student->name() }}" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label for="email">Phone</label>
                                    <input type="email" name="email" id="email"
                                        value="{{ $enrollment->student->phone }}" class="form-control">
                                    @error('email')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="location">Course</label>
                                    <input type="text" name="location" id="location"
                                        placeholder="Bucharest, Romania"
                                        value="{{ $enrollment->course->name }}"
                                        class="form-control">
                                    @error('location')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-6">
                                    <label for="phone">Session</label>
                                    <input type="text" name="phone" id="phone" placeholder="0733456987"
                                        value="{{ $enrollment->academicSession->start_date }}" class="form-control">
                                    @error('phone')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-5 row justify-content-center">
                <div class="col-lg-9 col-12 ">
                    <div class="card " id="basic-info">
                        <div class="pt-0 card-body">
                            <div class="row">
                                <div class="col-6">
                                    <label for="location">Payment Status</label>
                                    @if($enrollment->payment)
                                    <p><span class="badge badge-sm border border-success text-success bg-success">Paid</span></p>
                                    @else
                                    <p><span class="badge badge-sm border border-danger text-danger bg-danger">Not Paid</span></p>
                                    <p>
                                    <form action="{{url('/update-enrollment-payment/'.$enrollment->id)}}" method="post" onsubmit="return confirm('Are you sure student has paid?'); ">
                                        @csrf
                                    <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Add Payment</button>
                                    </form>
                                    </p>
                                    @endif
                                </div>

                                <div class="col-6">
                                    
                                
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <x-app.footer />
        </div>
    </main>

</x-app-layout>
