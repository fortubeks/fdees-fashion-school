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
            <li><a href="{{url('/admissions')}}" class="dropdown-toggle">Admissions</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle active">Courses +</a>
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
  
  
  <!-- end header inner -->
  <div class="clearfix"></div>
  <section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-9 col-centered text-center">
          <h4 class="less-mar3 roboto-slab text-white text-center font-weight-3">Ready to make your mark in the world of fashion? Apply now and join a community of aspiring designers, marketers, and innovators.</h4>
          
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
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-1.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Beginner)</h4>
              <p><b>Aim of the Module:</b> To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>  Duration:</b> 3 Months 
              <p><b>  Subjects:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Pattern Making </li>
                <li><i class="fa fa-check"></i> Garment Construction </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="#">Apply Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="intermediate">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-2.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Intermediate)</h4>
              <p><b>Aim of the Module:</b> To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>  Duration:</b> 3 Months 
              <p><b>  Subjects:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Pattern Making </li>
                <li><i class="fa fa-check"></i> Garment Construction </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="#">Apply Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="advanced">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-3.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">3 Months Fashion Designing Course (Advanced)</h4>
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
              <a class="btn btn-pink-3 btn-round" href="#">Apply Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="manual">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-4.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">Manual Fashion Illustration</h4>
              <p>This 10-week Manual Fashion Illustration class is designed to introduce students to the art 
                and techniques of fashion illustration using traditional, manual methods. Through a series of 
                hands-on lessons and projects, students will learn the fundamental skills required to create 
                beautiful and expressive fashion illustrations. Whether you're a budding fashion designer or 
                simply interested in the art of fashion representation, this course will provide you with a 
                solid foundation in manual fashion illustration.</p>
              
              <p><b>  Duration:</b> 10 Weeks (1 Lecture per week)
              <p><b>  Course goals:</b></p>
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Develop fundamental drawing skills applicable to fashion illustration </li>
                <li><i class="fa fa-check"></i> Understand the proportions and anatomy of the fashion figure. </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="#">Apply Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="#">Learn more</a>
            </div>
          </div>
        </div>
        <!--end item--> 

        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="text-box border" id="digital">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-1.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">Digital Fashion Illustration</h4>
              <p>This 12-week Digital Fashion Illustration class is designed to introduce students to the art 
                and techniques of fashion illustration using modern digital methods. Through a series of 
                hands-on lessons and projects, students will learn the fundamental skills required to create 
                beautiful and expressive fashion illustrations. Whether you're a budding fashion designer or 
                simply interested in the art of fashion representation, this course will provide you with a 
                solid foundation in digital fashion illustration.</p>
              
              <p><b>  Duration:</b> 12 Weeks (Once a week for 3 months)
              <p><b>  Software:</b> SketchBook AutoDesk </p>
              
              <br/>
              <a class="btn btn-pink-3 btn-round" href="#">Apply Now</a> <a style="background-color:#DBDBDB" class="btn btn-round" href="#">Learn more</a>
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
  