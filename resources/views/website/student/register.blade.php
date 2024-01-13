@extends('layouts.hasta.app')

@section('content')
  <div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="index.html" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
        <ul class="nav pink-3 navbar-nav">
            <li><a href="{{url('/')}}" class="dropdown-toggle">Home</a></li>
            <li><a href="{{url('/about')}}" class="dropdown-toggle active">About</a></li>
            <li><a href="{{url('/admissions')}}" class="dropdown-toggle">Admissions</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses/')}}#beginner">Beginner</a> </li>
                <li> <a href="{{url('/courses/')}}#intermediate">Intermediate</a> </li>
                <li> <a href="{{url('/courses/')}}#advanced">Advanced</a> </li>
                <li> <a href="{{url('/courses/')}}#manual">Manual Fashion Illustration</a> </li>
                <li> <a href="{{url('/courses/')}}#digital">Digital Fashion Illustration</a> </li>
              </ul>
            </li>
            <li><a href="#" class="dropdown-toggle">Gallery</a></li>
            <li><a href="#" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{url('/contact')}}" class="dropdown-toggle">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
  
  <section>
    <div class="header-inner two">
      <div class="inner text-center">
        <h4 class="title text-white uppercase"></h4>
        <h5 class="text-white uppercase"></h5>
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="{{url('/images/bg-1.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>

  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>About Us</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/')}}">Home</a><i> / </i> Registration </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="px-5 py-4 container ">
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

                            <div class="row">
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
                            <div class="row">
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
                                    <input type="text" name="date_of_birth" id="middle_name"
                                        value="{{ old('date_of_birth', '') }}" class="form-control">
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
                                    <label for="state">State</label>
                                    <select name="state" class="form-control">
                                        <option value="Abia">Abia</option>
                                        <option value="Abuja">Abuja</option>
                                    </select>
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
                                <div class="col-4">
                                    <label for="programme_registered">Programme Registered</label>
                                    <select name="programme_registered" class="form-control">
                                        <option value="Advanced Diploma">Advanced Diploma</option>
                                    </select>
                                    @error('programme_registered')
                                        <span class="text-danger text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-4">
                                    <label for="last_name">Intended Date</label>
                                    <input type="text" name="intended_date" id="intended_date"
                                        value="{{ old('intended_date', '') }}" class="form-control">
                                    @error('intended_date')
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
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  @endsection