<x-app-layout>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <x-app.navbar />
        <div class="px-5 py-4 container-fluid ">
            <form action="{{ url('students') }}" method="POST">
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
                                        <input type="text" name="phone" id="first_name"
                                            value="{{ old('phone', '') }}" class="form-control">
                                        @error('phone')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="middle_name">Date of Birth</label>
                                        <input type="date" name="date_of_birth" class="form-control">
                                        @error('date_of_birth')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="sponsor">Sponsor name & phone</label>
                                        <input type="text" name="sponsor" id="sponsor"
                                            value="{{ old('sponsor', '') }}" class="form-control">
                                        @error('sponsor')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
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
                                    <div class="col-4">
                                        <label for="middle_name">Marital Status</label>
                                        <select name="marital_status" class="form-control">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                        </select>
                                        @error('marital_status')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="religion">Religion</label>
                                        <select name="religion" class="form-control">
                                            <option value="christianity">Christianity</option>
                                            <option value="muslim">Muslim</option>
                                        </select>
                                        @error('religion')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">Occupation</label>
                                        <input type="text" name="occupation" id="occupation"
                                            value="{{ old('occupation', '') }}" class="form-control">
                                        @error('occupation')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <label for="nationality">Nationality</label>
                                        <select name="nationality" class="form-control">
                                            <option value="Nigerian">Nigerian</option>
                                            
                                        </select>
                                        @error('state')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-4">
                                        <option>--Select State</option>
                                        @foreach(getModelList('states') as $state)
                                        <option value="{{$state->name}}">{{$state->name}}</option>
                                        @endforeach
                                        @error('state')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-6">
                                        <label for="name">Home Address</label>
                                        <input type="text" name="home_address" id="home_address"
                                            value="{{ old('home_address', '') }}" class="form-control">
                                        @error('home_address')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-6">
                                        <label for="name">Work Address</label>
                                        <input type="text" name="work_address" id="work_address"
                                            value="{{ old('work_address', '') }}" class="form-control">
                                        @error('work_address')
                                            <span class="text-danger text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-4">
                                        <label for="name">Highest Qualification</label>
                                        <select name="highest_qualification" class="form-control">
                                            <option value="Bsc">Bsc</option>
                                        </select>
                                        @error('highest_qualification')
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
