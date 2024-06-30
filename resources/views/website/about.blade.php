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
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses-beginner')}}">Beginner</a> </li>
                <li> <a href="{{url('/courses-advanced')}}">Advanced</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle">Gallery</a></li>
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
      <img src="{{url('/images/bg-2.jpg')}}" alt="" class="img-responsive"/> </div>
  </section>
  <!-- end header inner -->
  <div class="clearfix"></div>
  
  <section>
    <div class="container">
      <div class="divider-line solid light opacity-7 "></div>
      <div class="row "> <br/>
        <br/>
        <div class="col-md-9 col-centered text-center">
          <h3 class="text-pink-3 roboto-slab font-weight-3">Welcome to Fdees Fashion Academy</h3>
          <h4 class="text-pink-3 roboto-slab font-weight-3">

At Fdees Fashion Academy, we believe that fashion is not just about clothing - it's a powerful form of self-expression and a dynamic art that reflects culture, innovation, and individuality. Our academy stands as a testament to the transformative potential of education in the world of fashion.</h4>
          <br/>
          <br/>
        </div>
      </div>
    </div>
  </section>
  <div class="clearfix"></div>
  <!-- end section -->

  <section>
    <div class="pagenation-holder">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>About Us</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/')}}">Home</a><i> / </i> About Us </div>
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
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-1.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Our Story</a></h4>
          <p>Established with a passion for nurturing creative minds, Fdees Fashion Academy was founded on the principles of innovation, inclusivity, and excellence. Over the years, we've cultivated an environment where aspiring fashion enthusiasts can turn their dreams into reality.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-2.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Our Mission</a></h4>
          <p>Our mission is simple yet profound - to empower the next generation of fashion leaders. We strive to provide an education that transcends the conventional, preparing students not only for careers in fashion but also to be influencers and changemakers in the industry.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-3.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Holistic Education</a></h4>
          <p>We go beyond traditional teaching methods, offering a holistic approach that integrates creativity, technology, and business acumen. Our students graduate with a well-rounded skill set, ready to thrive in the diverse landscape of the fashion world.</p>
        </div>
        <!--end item-->
        
        <div class="clearfix"></div>
        <div class="col-divider-margin-4"></div>
        <div class="divider-line solid light opacity-7"></div>
        <div class="col-divider-margin-4"></div>
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-4.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Expert Faculty</a></h4>
          <p>Learn from seasoned professionals and industry experts who bring a wealth of experience to the classroom. Our faculty is dedicated to fostering a supportive learning environment where innovation and originality are celebrated.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-5.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">State-of-the-art Facilities</a></h4>
          <p>Immerse yourself in a space designed to inspire. Our state-of-the-art facilities provide the perfect canvas for your creative endeavors, from cutting-edge design studios to collaborative workspaces.</p>
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6 col-xs-12 bmargin"> <a href="#"><img src="{{url('/images/about-6.jpg')}}" alt="" class="img-responsive"/></a> <br/>
          <h4 class="uppercase roboto-slab font-weight-3"><a href="#">Global Perspective</a></h4>
          <p>Embrace a global perspective with a curriculum that reflects the international nature of the fashion industry. We encourage our students to think globally, ensuring they're well-prepared for the demands of an interconnected world.</p>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!-- end section -->
  <div class="clearfix"></div>
  
  
  
  <section style="display: none;">
    <div class="container">
      <div class="divider-line solid light opacity-7 "></div>
      <div class="row sec-bpadding-2">
        <div class="col-md-3 col-sm-6 bmargin text-center">
          <h1 class="text-white"><span class="icon-hotairballoon"></span></h1>
          <h1 class="text-pink-3"><strong>96%</strong></h1>
          <div class="divider-line solid align-center less-width-6 margin light"></div>
          <h3 class="paddtop1 roboto-slab">Success Rate</span> </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 bmargin text-center">
          <h1 class="text-white"><span class="icon-hotairballoon"></span></h1>
          <h1 class="text-pink-3"><strong>92%</strong></h1>
          <div class="divider-line solid align-center less-width-6 margin light"></div>
          <h3 class="paddtop1 roboto-slab">Happy Students</span> </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 bmargin text-center">
          <h1 class="text-white"><span class="icon-hotairballoon"></span></h1>
          <h1 class="text-pink-3"><strong>100%</strong></h1>
          <div class="divider-line solid align-center less-width-6 margin light"></div>
          <h3 class="paddtop1 roboto-slab">Campus Jobs</span> </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
        </div>
        <!--end item-->
        
        <div class="col-md-3 col-sm-6 bmargin text-center">
          <h1 class="text-white"><span class="icon-hotairballoon"></span></h1>
          <h1 class="text-pink-3"><strong>86%</strong></h1>
          <div class="divider-line solid align-center less-width-6 margin light"></div>
          <h3 class="paddtop1 roboto-slab">Awards</span> </h3>
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. </p>
        </div>
        <!--end item--> 
        
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  @endsection