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
            <li><a href="{{url('/about')}}" class="dropdown-toggle">About</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses/')}}#beginner">Beginner</a> </li>
                <li> <a href="{{url('/courses/')}}#intermediate">Intermediate</a> </li>
                <li> <a href="{{url('/courses/')}}#advanced">Advanced</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle">Gallery</a></li>
            <li><a href="#" class="dropdown-toggle">Blog</a></li>
            <li><a href="{{url('/contact')}}" class="dropdown-toggle active">Contact</a></li>
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
      </div>
      <div class="overlay bg-opacity-5"></div>
      <img src="{{url('/images/bg-2.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Contact</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/')}}">Home</a><i> / </i> Contact</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="smart-forms bmargin">
            <h3 class=" roboto-slab">Contact Us</h3>
            <p>Fill in the form below and we will get back to you soonest.</p>
            <br/>
            <br/>
            <form method="post" action="#" id="smart-form">
              <div>
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="text" name="sendername" id="sendername" class="gui-input" placeholder="Enter name">
                    <span class="field-icon"><i class="fa fa-user"></i></span> </label>
                </div>
                <!-- end section -->
                
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="email" name="emailaddress" id="emailaddress" class="gui-input" placeholder="Email address">
                    <span class="field-icon"><i class="fa fa-envelope"></i></span> </label>
                </div>
                <!-- end section -->
                
                <div class="section colm colm6">
                  <label class="field prepend-icon">
                    <input type="tel" name="telephone" id="telephone" class="gui-input" placeholder="Telephone">
                    <span class="field-icon"><i class="fa fa-phone-square"></i></span> </label>
                </div>
                <!-- end section -->
                
                <div class="section">
                  <label class="field prepend-icon">
                    <input type="text" name="sendersubject" id="sendersubject" class="gui-input" placeholder="Enter subjec">
                    <span class="field-icon"><i class="fa fa-lightbulb-o"></i></span> </label>
                </div>
                <!-- end section -->
                
                <div class="section">
                  <label class="field prepend-icon">
                    <textarea class="gui-textarea" id="sendermessage" name="sendermessage" placeholder="Enter message"></textarea>
                    <span class="field-icon"><i class="fa fa-comments"></i></span> <span class="input-hint"> <strong>Hint:</strong> Please enter between 80 - 300 characters.</span> </label>
                </div>
                <!-- end section --> 
                
                <!--<div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label class="field">
                                    <input type="text" name="captcha" id="captcha" class="gui-input sfcode" maxlength="6" placeholder="Enter CAPTCHA">
                                </label>
                                <label class="button captcode">
                                    <img src="php/captcha/captcha.php?<?php echo time();?>" id="captchax" alt="captcha">
                                    <span class="refresh-captcha"><i class="fa fa-refresh"></i></span>
                                </label>
                            </div> 
                        </div>-->
                
                <div class="result"></div>
                <!-- end .result  section --> 
                
              </div>
              <!-- end .form-body section -->
              <div class="form-footer">
                <button type="submit" data-btntext-sending="Sending..." class="button btn-primary pink-3">Submit</button>
                <button type="reset" class="button"> Cancel </button>
              </div>
              <!-- end .form-footer section -->
            </form>
          </div>
          <!-- end .smart-forms section --> 
          
        </div>
        <div class="col-md-4 bmargin">
          <h3 class="roboto-slab">Address Info</h3>

          <h6><strong>Company Name</strong></h6>
          No. 1 Audu Bako way Nassarawa GRA opposite Hospital Road Kano <br />
          Telephone: 0809 901 9989<br />
          E-mail: <a href="mailto:hello@fdeesfashionacademy.com">hello@fdeesfashionacademy.com</a><br />
          <div class="clearfix"></div>
          <br/>
          <h3 class="roboto-slab">Find the Address</h3>
          <div id="map" class="map">
            <p>This will be replaced with the Google Map.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  @endsection