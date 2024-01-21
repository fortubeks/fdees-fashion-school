@extends('layouts.hasta.app')

@section('content')
  <div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="{{url('/')}}" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a> </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
            <li><a href="{{url('/')}}" class="dropdown-toggle">Home</a></li>
            <li><a href="{{url('/about')}}" class="dropdown-toggle">About</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle active">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses-beginner')}}">Beginner</a> </li>
                <li> <a href="{{url('/courses-intermediate')}}">Intermediate</a> </li>
                <li> <a href="{{url('/courses-advanced')}}">Advanced</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle">Gallery</a></li>
            <li><a href="#" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{url('/contact')}}" class="dropdown-toggle">Contact</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!--end menu-->
  <div class="clearfix"></div>
  
  
  <!-- end header inner -->
  <div class="clearfix"></div>
  <section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-centered text-center">
          <h4 class="less-mar3 roboto-slab text-white text-center font-weight-3">Ready to make your mark in the world of fashion? <a href="{{url('/student-register')}}" style="padding:5px 5px" class=""> Register now</a> and join a community of aspiring designers, marketers, and innovators.</h4>
          
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        
        <div class="text-box border" id="beginner">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-beginner.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Beginner) - ₦ 450,000</h4>
              <p><b>Aim of the Module:</b> To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>  Duration:</b> 3 Months 
              <p><b>  Subjects:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Pattern Making </li>
                <li><i class="fa fa-check"></i> Garment Construction </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="{{url('/student-register')}}">Register Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="{{url('/courses-beginner')}}">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="intermediate">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-intermediate.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Intermediate) - ₦ 350,000</h4>
              <p><b>Aim of the Module:</b> To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>  Duration:</b> 3 Months 
              <p><b>  Subjects:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Pattern Making </li>
                <li><i class="fa fa-check"></i> Garment Construction </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="{{url('/student-register')}}">Register Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="{{url('/courses-intermediate')}}">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="advanced">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-advanced.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Advanced) - ₦ 300,000</h4>
              <p><b>Aim of the Module:</b> To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>Requirements:</b> Students must have completed our intermediate course or have completed a 
                course equivalent to our Intermediate course curriculum.</p>
              <p><b>  Duration:</b> 3 Months + 2 Months Internship
              <p><b>  Subjects:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Pattern Making </li>
                <li><i class="fa fa-check"></i> Garment Construction </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="{{url('/student-register')}}">Register Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="{{url('/courses-advanced')}}">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
         
        
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- end section -->
  @endsection
  <script type="text/javascript" src="js/smart-forms/jquery.form.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/jquery.validate.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/additional-methods.min.js"></script> 
<script type="text/javascript" src="js/smart-forms/smart-form.js"></script> 
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<script type="text/javascript" src="js/gmaps/jquery.gmap.js"></script> 
<script type="text/javascript" src="js/gmaps/examples.js"></script> 
<script src="js/scripts/functions.js" type="text/javascript"></script>
