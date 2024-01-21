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
        <div class="col-md-9 col-centered text-center">
        <h4 class="roboto-slab font-weight-3">3 Months Fashion Designing Course (Beginner) - ₦ 450,000</h4>
        <h5 class="roboto-slab font-weight-3">Aim of the Module</h5> 
        <p>To enable individual create apparel or custom patterns with respective 
                final finishing, according to the clothing requirements.</p>
              <p><b>  Duration:</b> 3 Months 
              <h5 class="roboto-slab font-weight-3"> Subjects</h4>
              
        </div>
        <div class="text-box border" id="beginner">
          <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-beginner.jpg')}}" alt="" class="img-responsive"/></div>
          <div class="col-md-6 bmargin">
            <div class="text-box padding-3">
              <h4 class="roboto-slab font-weight-4">Pattern Making</h4>
              <p><b>Topics to be covered:</b> </p>
              
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Introduction to Pattern Making (1 Class) </li>
                <li><i class="fa fa-check"></i> Skirt Block (Front & Back) (1 Class) </li>
                <li><i class="fa fa-check"></i> Skirt Variations (A-line, Pleat, Flare, Circular, etc) (3 Classes) </li>
                <li><i class="fa fa-check"></i> Basic Bodice Block (Front & Back) + Waist Shaping (2 Classes) </li>
                <li><i class="fa fa-check"></i> Dart Manipulation with variations (3 Classes) </li>
                <li><i class="fa fa-check"></i> Yokes, Wrap and Empire Lines (3 Classes) </li>
                <li><i class="fa fa-check"></i> Style Lines (5 Classes) </li>
                <ul class="iconlist dark">
                  <li>a. Princess Style Lines (Armhole and Shoulder)</li>
                  <li>b. Variations</li>
                </ul>
                <li><i class="fa fa-check"></i> Sleeve and Variations (3 Classes) </li>
                <li><i class="fa fa-check"></i> Collar and Neckline Variations (3 Classes) </li>
                <li><i class="fa fa-check"></i> Dress Foundation (1 Class) </li>
              </ul>
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
              <h4 class="roboto-slab font-weight-4">Garment Construction</h4>
              
              <ul class="iconlist dark">
                <li><i class="fa fa-check"></i> Parts of a Sewing Machine - 1 Class </li>
                <li><i class="fa fa-check"></i> Treadling the Machine - 1 Class </li>
                <li><i class="fa fa-check"></i> Stitching on paper for alignment - 1 Class </li>
                <li><i class="fa fa-check"></i> Threading the machine - 1 Class </li>
                <li><i class="fa fa-check"></i> Basic Machine Templates (10) - 1 Class </li>
                <li><i class="fa fa-check"></i> Seams (Topstitch, Flat-Fell, French) - 1 Class </li>
                <li><i class="fa fa-check"></i> Pleats, Tucks, Gathers, Ruffles - 1 Class </li>
                <li><i class="fa fa-check"></i> Facing - 2 Classes </li>
                <li><i class="fa fa-check"></i> Hook and eyelet - 1 Class </li>
                <li><i class="fa fa-check"></i> Hemming - 1 Classes </li>
                <li><i class="fa fa-check"></i> Zippers - 1 Classes </li>
                <li><i class="fa fa-check"></i> Pockets - 1 Classes </li>
                <li><i class="fa fa-check"></i> Bands (Shaped and Straight Bands) </li>
              </ul>
              <br/>
              <a class="btn btn-pink-3 btn-round" href="{{url('/student-register')}}">Register Now</a> 
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

