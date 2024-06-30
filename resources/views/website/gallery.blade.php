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
            <li class="dropdown"> <a href="{{url('/courses')}}" class="dropdown-toggle ">Courses +</a>
              <ul class="dropdown-menu five" role="menu">
                <li> <a href="{{url('/courses-beginner')}}">Beginner</a> </li>
                <li> <a href="{{url('/courses-advanced')}}">Advanced</a> </li>
              </ul>
            </li>
            <li><a href="{{url('/gallery')}}" class="dropdown-toggle active">Gallery</a></li>
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
            <h3>Gallery</h3>
          </div>
          <div class="col-md-6 text-right">
            <div class="pagenation_links"><a href="{{url('/')}}">Home</a><i> / </i> Gallery</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>
  
  <section class="sec-tpadding-2">
    <div class="container">
      <div class="row">
          <h3 class=" roboto-slab uppercase less-mar3">Gallery</h3>
            <div class="title-line-9 less-margin align-center"></div>
            <div class="clearfix"></div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="demo-full-width">
          <div id="grid-container" class="cbp">
            <div class="cbp-item identity logos"> <a href="{{url('/images/gallery/gallery-1.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Suspendisse Imperdiet<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-1.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Enter Greatness </div>
                    <div class="cbp-l-caption-desc">Enter Fdees Fashion Academy</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design"> <a href="{{url('/images/gallery/gallery-2.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Magna Tempus Urna<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-2.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Our Instructors</div>
                    <div class="cbp-l-caption-desc">highly dedicated</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item motion identity"> <a href="{{url('/images/gallery/gallery-3.jpg')}}" class="cbp-caption cbp-lightbox" data-title="World Clock Widget<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-3.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Individual Trainings </div>
                    <div class="cbp-l-caption-desc">One on One</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item identity graphic"> <a href="{{url('/images/gallery/gallery-4.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Quisque Ornare <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-4.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Individual Trainings </div>
                    <div class="cbp-l-caption-desc">One on One</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item motion logos"> <a href="{{url('/images/gallery/gallery-5.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Skateshop Website<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-5.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                    <div class="cbp-l-caption-title">Condusive environment</div>
                    <div class="cbp-l-caption-desc">Fdees academy</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design"> <a href="{{url('/images/gallery/gallery-6.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Donec Dapibus Placerat <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-6.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Condusive environment</div>
                    <div class="cbp-l-caption-desc">Fdees academy</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item identity motion"> <a href="{{url('/images/gallery/gallery-7.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Mauris non Quam ac eros<br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-7.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Condusive environment</div>
                    <div class="cbp-l-caption-desc">Fdees academy</div>
                  </div>
                </div>
              </div>
              </a> </div>
            <div class="cbp-item web-design graphic"> <a href="{{url('/images/gallery/gallery-8.jpg')}}" class="cbp-caption cbp-lightbox" data-title="Vivamus Vulputate <br>by Codelayers">
              <div class="cbp-caption-defaultWrap"> <img src="{{url('/images/gallery/gallery-8.jpg')}}" alt=""> </div>
              <div class="cbp-caption-activeWrap">
                <div class="cbp-l-caption-alignLeft">
                  <div class="cbp-l-caption-body">
                  <div class="cbp-l-caption-title">Condusive environment</div>
                    <div class="cbp-l-caption-desc">Fdees academy</div>
                  </div>
                </div>
              </div>
              </a> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--end section-->
  <div class="clearfix"></div>

  <!-- end section -->
  @endsection
  