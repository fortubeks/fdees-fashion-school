@extends('layouts.hasta.app')

@section('content')
<div id="header">
    <div class="container">
      <div class="navbar pink-3 navbar-default yamm">
        <div class="navbar-header">
          <button type="button" data-toggle="collapse" data-target="#navbar-collapse-grid" class="navbar-toggle two three"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
          <a href="{{url('/')}}" class="navbar-brand less-top-padding"><img src="images/logo.png" alt=""/></a> 
        </div>
        <div id="navbar-collapse-grid" class="navbar-collapse collapse pull-right">
          <ul class="nav pink-3 navbar-nav">
            <li><a href="{{url('/')}}" class="dropdown-toggle active">Home</a></li>
            <li><a href="{{url('/about')}}" class="dropdown-toggle">About</a></li>
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses/')}}#beginner">Beginner</a> </li>
                <li> <a href="{{url('/courses/')}}#intermediate">Intermediate</a> </li>
                <li> <a href="{{url('/courses/')}}#advanced">Advanced</a> </li>
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
  
  <!-- masterslider -->
  <div class="master-slider ms-skin-default" id="masterslider"> 
    
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="{{url('/images/home-bg-1.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text42"
			style="top: 250px; left:230px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43"
			style="top: 290px; left:230px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
      href="{{url('/courses')}}"
			style="left: 230px; top: 380px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
      <a class="ms-layer sbut19"
      href="{{url('/student-register')}}"
			style="left: 390px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Register ! </a> 
            
            </div>
    <!-- end slide 1 --> 
    
    
    <!-- slide 2 -->
    <div class="ms-slide slide-2" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="{{url('/images/home-bg-2.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text42 text-center"
			style="top: 220px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43 text-center"
			style="top: 270px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
      href="{{url('/about')}}"
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
            href="{{url('/student-register')}}"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Register ! </a> 
            
            </div>
    <!-- end slide 2 -->
    
    <!-- slide 3 -->
    <div class="ms-slide slide-3" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="{{url('/images/home-bg-3.jpg')}}" alt=""/>
      
      <h3 class="ms-layer text42 text-center"
			style="top: 220px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="left(250)"> Experimental & </h3>
            
      <h3 class="ms-layer text43 text-center"
			style="top: 270px;"
			data-type="text"
			data-delay="1000"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="right(250)"> experienced <span>learning</span></h3>
            
      <a class="ms-layer sbut18"
      href="{{url('/courses')}}"
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
            href="{{url('/student-register')}}"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Register ! </a> 
            
            </div>
    <!-- end slide 3 -->
  </div>
  <!-- end of masterslider -->
  <div class="clearfix"></div>
  
  <section class="section-pink-3 section-less-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-centered">
          <h3 class="less-mar3 roboto-slab text-white text-center font-weight-3">
          Are you ready to embark on a journey into the dynamic world of fashion? At Fdees Fashion Academy, we believe in nurturing creativity, fostering innovation, and shaping the next generation of fashion leaders.
          </h3>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#beginner')}}">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Beginner<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="{{url('/images/about-1.jpg')}}" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item-->
          
          
          
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#intermediate')}}">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Intermediate<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="{{url('/images/about-2.jpg')}}" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item-->
          
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#advanced')}}">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Advanced<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="{{url('/images/about-2.jpg')}}" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item-->
          
          
          
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  <section class="parallax-section57">
    <div class="section-overlay light bg-opacity-7">
      <div class="container">
        <div class="row sec-tpadding-2 sec-bpadding-2">
          <div class="col-md-6 col-sm-6 text-left bmargin">
            <h3 class=" roboto-slab uppercase less-mar3">Our Approach</h3>
            <div class="title-line-9 less-margin align-center"></div>
            <div class="clearfix"></div>
            <p>At Fdees Fashion Academy, our approach to fashion education goes beyond the conventional. We understand that creativity knows no bounds, and we strive to cultivate an environment that nurtures, challenges, and inspires our students to reach new heights in the world of fashion. </p>
            <br/>
            <p>Each student is unique, and our faculty recognizes the individual strengths and aspirations of every student. Our personalized mentorship program connects students with experienced professionals who provide guidance, support, and insights tailored to each student's journey. </p>
            <br/>
            <a href="{{url('/about')}}" class="read-more pink-3"><i class="fa fa-angle-double-right"></i> Read More</a> </div>
          <!--end item-->
          
          <div class="col-md-6 col-sm-6 bmargin">
            <div class="master-slider ms-skin-default" id="masterslider2">
              <div class="ms-slide slide-1" data-delay="18">
                <h3 class="ms-layer text44"
			style="top: 190px; left:50px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"> Cutting-Edge Curriculum</h3>
                <h3 class="ms-layer text44"
			style="top: 225px; left:50px;"
			data-type="text"
			data-delay="500"
			data-ease="easeOutExpo"
			data-duration="1230"
			data-effect="scale(1.5,1.6)"> Personalized Mentorship </h3>
                <img src="/images/home-approach.jpg" data-src="{{url('/images/home-approach.jpg')}}" alt=""/> </div>
              <!-- end --> 
              
            </div>
            <!-- end of slide --> 
            
          </div>
          <!--end item--> 
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  
  <section class="parallax-section58">
    <div class="section-overlay bg-opacity-7">
      <div class="container sec-tpadding-3 sec-bpadding-3">
        <div class="row">
          <div class="col-md-8 col-centered">
            <h1 class="raleway text-white parallax-section-title uppercase">Studying at Fdees</h1>
            <br/>
            <p class="text-white">Discover a fashion school that believes in unleashing the boundless potential of creative minds. At Fdees Fashion Academy, our approach is not just about education; it's about fostering a community of forward-thinkers and trailblazers who will shape the future of fashion.</p>
            <br/>
            <a class="btn btn-pink-3 btn-round" href="{{url('/about')}}">Read more</a> <br/>
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
        <div class="col-md-6 col-sm-6 clearfix">
          <div class="item-holder">
            <h4 class=" roboto-slab uppercase less-mar3">Why Choose Us</h4>
            <div class="title-line-9 less-margin align-center"></div>
            <br/>
            <br/>
            <h5 class="uppercase oswald font-weight-3 text-pink-3">Holistic Education</h5>
            <p>We go beyond traditional teaching methods, offering a holistic approach that integrates creativity, technology, and business acumen. Our students graduate with a well-rounded skill set, ready to thrive in the diverse landscape of the fashion world.</p>
            <br/>
            <div class="divider-line solid light opacity-7"></div>
            <br/>
            <h5 class="uppercase oswald font-weight-3 text-pink-3">Global Perspective</h5>
            <p>Embrace a global perspective with a curriculum that reflects the international nature of the fashion industry. We encourage our students to think globally, ensuring they're well-prepared for the demands of an interconnected world.</p>
            <br/>
            <a class="read-more pink-3" href="{{url('/courses')}}">Read More <i class="fa fa-angle-double-right"></i></a></div>
        </div>
        <!--end item-->
        
        <div class="col-md-6 col-sm-6 clearfix">
          <div class="item-holder">
            <h4 class=" roboto-slab uppercase less-mar3">Event Gallery</h4>
            <div class="title-line-9 less-margin align-center"></div>
            <br/>
            <br/>
            <div id="owl-demo4" class="owl-carousel">
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Conducive atmosphere </h4>
                    <p class="text-white">Conducive atmosphere for learning</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="{{url('/images/home-g-1.jpg')}}" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Our Students </h4>
                    <p class="text-white">Come join our community of creators</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="{{url('/images/home-g-2.jpg')}}" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Condusive atmosphere </h4>
                    <p class="text-white">Best facilities in a condusive atmosphere</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="{{url('/images/home-g-3.jpg')}}" alt="" class="img-responsive"/> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
@endsection