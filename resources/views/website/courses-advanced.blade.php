@extends('layouts.hasta.app')

@section('content')
<div id="header">
  <div class="container">
    <div class="navbar pink-3 navbar-default yamm">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="{{url('/')}}" class="navbar-brand less-top-padding"><img src="images/logo.png" alt="" /></a>
      </div>
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
        <h4 class="roboto-slab font-weight-3">3 Months Fashion Designing Course (Advanced) </h4>
        <h5 class="roboto-slab font-weight-3">Aim of the Module</h5>
        <p>To enable individual create apparel or custom patterns with respective
          final finishing, according to the clothing requirements.</p>
        <h5 class="roboto-slab font-weight-3">Requirement</h5>
        <p>Students must have completed our intermediate Course or have completed a Course equivalent our Intermediate Course curriculum.</p>
        <p><b> Duration:</b> 3 Months + 2 Months Internship
        <h5 class="roboto-slab font-weight-3"> Subjects</h4>

      </div>
      <div class="text-box border" id="beginner">
        <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-beginner.jpg')}}" alt="" class="img-responsive" /></div>
        <div class="col-md-6 bmargin">
          <div class="text-box padding-3">
            <h4 class="roboto-slab font-weight-4">Pattern Making</h4>
            <p><b>Topics to be covered:</b> </p>

            <ul class="iconlist dark">
              <li><i class="fa fa-check"></i> Basic Patternmaking Blocks (Basic Bodice, Bodice Skirt and Basic Sleeve) </li>
              <li><i class="fa fa-check"></i> Basic Trouser Foundation </li>
              <li><i class="fa fa-check"></i> One-piece Jumpsuit Foundation </li>
              <li><i class="fa fa-check"></i> Asymmetric Designs </li>
              <li><i class="fa fa-check"></i> Kimono </li>
              <li><i class="fa fa-check"></i> Raglan </li>
              <li><i class="fa fa-check"></i> Drop Shoulder (Off-the-shoulder) </li>
              <li><i class="fa fa-check"></i> Bustier and Brassiere </li>
              <li><i class="fa fa-check"></i> Design Interpretation </li>
              <li><i class="fa fa-check"></i> Corsetry </li>
              <li><i class="fa fa-check"></i> Draping </li>
              <li><i class="fa fa-check"></i> Bridals </li>
            </ul>
          </div>
        </div>
      </div>
      <!--end item-->

      <div class="clearfix"></div>
      <div class="col-divider-margin-4"></div>
      <div class="text-box border" id="intermediate">
        <div class="col-md-6 bmargin nopadding"><img src="{{url('/images/courses-intermediate.jpg')}}" alt="" class="img-responsive" /></div>
        <div class="col-md-6 bmargin">
          <div class="text-box padding-3">
            <h4 class="roboto-slab font-weight-4">Garment Construction</h4>

            <ul class="iconlist dark">
              <li><i class="fa fa-check"></i> Sewing Techniques and Professional Finishing </li>
              <li><i class="fa fa-check"></i> Couture principles </li>
              <li><i class="fa fa-check"></i> Creative Embellishment techniques </li>
            </ul>
            <br />
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