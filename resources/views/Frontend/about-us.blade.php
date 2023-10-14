@extends('Frontend.layouts.app')

@section('content')
<!-- Start main-content -->
<div class="main-content-area">

  <!-- Section: home Start -->
  <section class="page-title divider layer-overlay overlay-theme-colored2-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-50 pb-50">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">About Us</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">About Us</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->


  <!-- Section: About -->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-xl-6">
          <img src="{{asset('Backend/images/about/'.$about->about_image)}}" alt="">
        </div>
        <div class="col-lg-12 col-xl-6 mt-lg-50">
          <h6 class="mt-0 font-italic sub-title-icon">{{$about-> about_title}}</h6>
          <h2>{{$about-> sub_title}}</h2>
          <p class="mb-40">{!! $about-> description!!}</p>

          <div class="row">
            <div class="col-md-6">
              <div class="tm-sc-unordered-list list-style mb-30 mt-20 mb-sm--0">
                <ul class="list-unstyled font-current-theme2">
                  <li><i class="icon fa fa-check-circle text-theme-colored1 me-2"></i> {{$about-> point1}}</li>
                  <li><i class="icon fa fa-check-circle text-theme-colored1 me-2"></i> {{$about-> point2}}</li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="tm-sc-unordered-list list-style mb-30 mt-20 mt-sm--0">
                <ul class="list-unstyled font-current-theme2">
                  <li><i class="icon fa fa-check-circle text-theme-colored1 me-2"></i> {{$about-> point3}}</li>
                  <li><i class="icon fa fa-check-circle text-theme-colored1 me-2"></i> {{$about-> point4}}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: About End-->



  <!-- Section: Service -->
  <section class="" data-tm-bg-color="#f4f7fe">
    <div class="container pb-70">
      <div class="section-content">
        <div class="row">
          <div class="col-md-6 col-xl-4">
            <div class="service-box mb-30">
              <div class="service-icon">
                <img class="icon-img" src="{{asset('Backend/images/mission/'.$mision->mission_image)}}" alt="Icon">
              </div>
              <div class="service-details">
                <h4 class="title"><a href="#">{{$mision->mission_title}}</a></h4>
                <p>{{$mision->mission_description}}</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="service-box mb-30">
              <div class="service-icon">
                <img class="icon-img" src="{{asset('Backend/images/vision/'.$mision->vision_image)}}" alt="Icon">
              </div>
              <div class="service-details">
                <h4 class="title"><a href="#">{{$mision->vision_title}}</a></h4>
                <p>{{$mision->vision_description}}</p>
                
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="service-box mb-30">
              <div class="service-icon">
                <img class="icon-img" src="{{asset('Backend/images/core/'.$mision->core_image)}}" alt="Icon">
              </div>
              <div class="service-details">
                <h4 class="title"><a href="#">{{$mision->core_title}}</a></h4>
                <p>{{$mision->core_description}}</p>
                
              </div>
            </div>
          </div>          
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Team -->
  <section class="bg-theme-colored2" data-tm-bg-img="{{asset('assets/images/footer-bg.png')}}">
  <div class="container pb-70">
    <div class="section-title">
      <div class="row">
        <div class="col-lg-12">
          <div class="tm-sc-section-title section-title text-center">
            <div class="title-wrapper">
              <h6 class="subtitle text-theme-colored1">Our Team</h6>
              <h2 class="title text-white">What We’re Serving</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content pb-40">
      <div class="row">
        @foreach($team as $t)
        <div class="col-md-6 col-lg-6 col-xl-6">
          <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
            <div class="tm-staff">
              <div class="staff-inner">
                <div class="thumb">
                  <img src="{{asset('Backend/images/team/'.$t->image)}}" alt="Image">

                </div>
                <div class="staff-content">
                  <h4 class="name"><a href="#">{{$t->name}}</a></h4>
                  <div class="speciality">{{$t->designation}}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <!-- <div class="col-md-6 col-lg-6 col-xl-6">
            <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
              <div class="tm-staff">
                <div class="staff-inner">
                  <div class="thumb">
                    <img src="images/team/2.jpg" alt="Image">
                    
                  </div>
                  <div class="staff-content">
                    <h4 class="name"><a href="#">Sarah Albert</a></h4>
                    <div class="speciality">Consultant</div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->

      </div>
    </div>
  </div>
</section>

  <!-- Section: Divider -->
  <section class="bg-theme-colored1">
    <div class="container pb-70 pt-70">
      <div class="section-content">
        <div class="row">
          <div class="col-lg-8">
            <h2 class="text-white">Now! Get a Free Expert Consultation for Your Health</h2>
          </div>
          <div class="col-lg-4">
            <div class="tm-sc-button mt-20 text-start text-lg-end">
              <a href="#" class="btn btn-light">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Divider -->
</div>
<!-- end main-content -->

@endsection