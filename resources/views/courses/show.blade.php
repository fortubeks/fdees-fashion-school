<x-app-layout>

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
    <div class="px-5 py-2 container-fluid ">
            <form action="{{ url('courses-admin/'.$course->id) }}" method="POST">
                @csrf
                @method('PUT')
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
                                <h5>Course details</h5>
                            </div>
                            <div class="pt-0 card-body">

                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">Course name</label>
                                        <input type="text" name="name" id="name"
                                            value="{{ old('name', $course->name) }}" class="form-control">
                                        @error('name')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="last_name">Amount </label>
                                        <input type="text" name="cost" id="cost"
                                            value="{{ old('cost', $course->cost) }}" class="form-control">
                                        @error('cost')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="email">Capacity</label>
                                        <input type="text" name="capacity" id="capacity"
                                            value="{{ old('capacity', $course->capacity) }}" class="form-control">
                                        @error('capacity')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <button type="submit" class="mt-6 mb-0 btn btn-white btn-sm float-end">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

</x-app-layout>
