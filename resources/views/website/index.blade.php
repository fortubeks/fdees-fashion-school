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
  
  <!-- masterslider -->
  <div class="master-slider ms-skin-default" id="masterslider"> 
    
    <!-- slide 1 -->
    <div class="ms-slide slide-1" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="images/bg-1.jpg" alt=""/>
      
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
			style="left: 230px; top: 380px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
			style="left: 390px; top: 380px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
            </div>
    <!-- end slide 1 --> 
    
    
    <!-- slide 2 -->
    <div class="ms-slide slide-2" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="images/bg-1.jpg" alt=""/>
      
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
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
            </div>
    <!-- end slide 2 -->
    
    <!-- slide 3 -->
    <div class="ms-slide slide-3" data-delay="9">
      <div class="slide-pattern"></div>
      <img src="js/masterslider/blank.gif" data-src="images/bg-1.jpg" alt=""/>
      
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
			style="left: 660px; top: 360px;"
			data-type="text"
			data-delay="1500"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="left(250)"> Read more </a> 
            
            <a class="ms-layer sbut19"
      href="{{url('/sign-up')}}"
			style="left:820px; top: 360px;"
			data-type="text"
			data-delay="2000"
			data-ease="easeOutExpo"
			data-duration="1200"
			data-effect="right(250)"> Apply Now ! </a> 
            
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
          
          <div class="col-divider-margin-3"></div>
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#manual')}}">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Manual Fashion Illustration<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="{{url('/images/about-1.jpg')}}" alt="" class="img-responsive"/> </div>
            </a> </div>
          <!--end item--> 
          
        </div>
        <!--end item-->
        
        <div class="col-md-4 col-sm-6">
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#intermediate')}}">
            <div class="image-holder">
              <div class="hover-strip active">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Intermediate<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
              </div>
              <img src="{{url('/images/home-430.jpg')}}" alt="" class="img-responsive"/> </div>
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
          
          <div class="col-divider-margin-3"></div>
          <div class="feature-box-81 bmargin"> <a href="{{url('/courses#digital')}}">
            <div class="image-holder">
              <div class="hover-strip">
                <h4 class="text-white nopadding roboto-slab font-weight-3">Digital Fashion Illustration<span class="pull-right"><i class="fa fa-angle-double-right"></i></span></h4>
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
            <a href="#" class="read-more pink-3"><i class="fa fa-angle-double-right"></i> Read More</a> </div>
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
                <img src="js/masterslider/blank.gif" data-src="http://placehold.it/600x300" alt=""/> <a href="http://player.vimeo.com/video/80567526" data-type="video"></a> </div>
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
  
  <section style="display: none;" class="sec-padding">
    <div class="container">
      <div class="row slide-controls-color-8">
        <div class="col-md-6">
          <h3 class=" roboto-slab uppercase less-mar3">Latest News</h3>
          <div class="title-line-9 less-margin align-center"></div>
          <div class="clearfix"></div>
          <br/>
          <div id="owl-demo3" class="owl-carousel">
            <div class="item">
              <div class="feature-box-82 bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Science Blog</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item-->
              <div class="col-divider-margin-3"></div>
              <div class="feature-box-82 active bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Library</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end slide item-->
            
            <div class="item">
              <div class="feature-box-82 bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Science Blog</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
              </div>
              <!--end item-->
              
              <div class="feature-box-82 active bmargin">
                <div class="col-md-6 nopadding"> <a href="#">
                  <div class="image-holder">
                    <div class="post-info">
                      <div class="post-infoicon"><i class="fa fa-heart"></i> 5</div>
                      <div class="post-infoicon"><i class="fa fa-comment"></i> 20</div>
                      <div class="post-infoicon"><i class="fa fa-share"></i> Share</div>
                    </div>
                    <img src="http://placehold.it/1000x1000" alt="" class="img-responsive"/> </div>
                  </a> </div>
                <div class="col-md-6">
                  <div class="text-box padding-3">
                    <h5 class="uppercase roboto-slab font-weight-4"><a href="#">Library</a></h5>
                    <div class="blog-post-info"> <span><i class="fa fa-user"></i> By Benjamin</span> <span><i class="fa fa-comments-o"></i> 15</span> </div>
                    <br/>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis.</p>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <!--end item--> 
              
            </div>
            <!--end slide item--> 
            
          </div>
          <!--end carousel--> 
          
        </div>
        <!--end item-->
        
        <div style="display: none;" class="col-md-6">
          <h3 class=" roboto-slab uppercase less-mar3">Latest Events</h3>
          <div class="title-line-9 less-margin align-center"></div>
          <div class="clearfix"></div>
          <br/>
          <div id="owl-demo2" class="owl-carousel">
            <div class="item">
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Monday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Tuesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Wednesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Thursday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
            </div>
            <!--end slide item-->
            
            <div class="item">
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Monday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Tuesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Wednesday, March 16</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue.</p>
              <br/>
              <div class="divider-line solid light opacity-7"></div>
              <br/>
              <h4 class="uppercase oswald font-weight-3 text-pink-3">Thursday, March 16</h4>
              <p>Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo Praesent mattis commodo augue Aliquam ornare hendrerit augue. Suspendisse et justo Praesent mattis commodo augue Aliquam ornare.</p>
              <br/>
            </div>
            <!--end slide item--> 
          </div>
          <!--end carousel--> 
        </div>
        <!--end item--> 
      </div>
    </div>
  </section>
  <!-- end section -->
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
            <a class="btn btn-pink-3 btn-round" href="#">Read more</a> <br/>
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
            <a class="read-more pink-3" href="#">Read More <i class="fa fa-angle-double-right"></i></a></div>
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
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-box24 bmargin">
                  <div class="inner"> <br/>
                    <br/>
                    <h4 class="text-white uppercase oswald font-weight-3">Vivamus et justo in nunc </h4>
                    <p class="text-white">Lorem ipsum dolor sit amet consectetuer adipiscing elit Suspendisse et justo.</p>
                    <br/>
                  </div>
                  <div class="image-holder">
                    <div class="overlay"></div>
                    <img src="http://placehold.it/450x350" alt="" class="img-responsive"/> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="display: none;" class="col-md-4 col-sm-6 last">
          <h4 class=" roboto-slab uppercase less-mar3">Features</h4>
          <div class="title-line-9 less-margin align-center"></div>
          <br/>
          <br/>
          <div class="item-holder">
            <div class="accordion_holder">
              <div class="accordion_example1"> 
                
                <!-- Section 1 -->
                <div class="accordion_in two st3 acc_active">
                  <div class="acc_head">student learning opportunities</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. </div>
                </div>
                
                <!-- Section 2 -->
                <div class="accordion_in two st3">
                  <div class="acc_head">Student storys</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
                </div>
                
                <!-- Section 3 -->
                <div class="accordion_in two st3">
                  <div class="acc_head">New courses</div>
                  <div class="acc_content"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Suspendisse et justo. Praesent mattis commodo augue. Aliquam ornare hendrerit augue. Cras tellus. In pulvinar lectus a est. Curabitur eget orci. Cras laoreet ligula. Etiam sit amet dolor. </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Accordion end --> 
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
@endsection