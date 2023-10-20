@extends('Frontend.layouts.app')

@section('content')
<!-- Start main-content -->
<div class="main-content-area">

  <!-- Section: home Start -->
  <section id="home">
    <div class="container-fluid p-0">
      <div class="row">
        <div class="col">
          <!-- START Industrivo Rev Slider 2 REVOLUTION SLIDER 6.1.7 -->
          <p class="rs-p-wp-fix"></p>
          <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="firoox-revolution-slider" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
            <rs-module id="rev_slider_1_1" data-version="6.3.3">
              <rs-slides>
                @foreach($banner as $b)
                <rs-slide data-key="rs-{{ $loop->index + 1 }}" data-title="Slide 1" data-thumb="{{asset('Backend/images/banners/'.$b->banner_image)}}" data-anim="ei:d;eo:d;s:d;r:default;t:slotslide-horizontal;sl:d;">
                  <img src="{{asset('Backend/images/banners/'.$b->banner_image)}}" title="firoox-s1" width="1920" height="1280" data-bg="p:center top;" data-parallax="off" class="rev-slidebg" data-no-retina>
                  <rs-layer id="slider-2-slide-2-layer-2" data-type="text" data-color="rgba(255, 255, 255, 0.11)" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:0,26px,0,0;y:m;yo:-141px,-103px,-124px,-99px;" data-text="w:normal;s:180,150,130,100;l:165,98,90,72;ls:0,0,-1px,0px;fw:700;a:left,left,center,center;" data-dim="w:1200px,890px,537px,455px;h:186px,138px,auto,auto;" data-frame_0="o:1;" data-frame_0_chars="d:5;y:-100%;o:0;rZ:35deg;" data-frame_0_mask="u:t;" data-frame_1="st:1360;sp:1200;sR:1360;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;sR:5640;" style="z-index:13;text-transform:uppercase;" class="font-current-theme1">{{$b->sub_title}}
                  </rs-layer>
                  <rs-layer id="slider-2-slide-2-layer-10" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:55px,55px,0,0;yo:281px,203px,175px,179px;" data-text="w:normal;s:22,22,24,20;l:30,32,24,22;ls:1px,1px,0px,1px;fw:500;a:left,left,center,center;" data-dim="w:482px,355px,344px,356px;h:auto,auto,auto,26px;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:500;sp:1000;sR:500;" data-frame_999="o:0;st:w;sR:7500;" style="z-index:12;" class="font-current-theme1">{{$b->banner_title}}
                  </rs-layer>
                  <rs-layer id="slider-2-slide-2-layer-18" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:55px,55px,8px,0;yo:318px,249px,212px,215px;" data-text="w:normal;s:75,70,60,40;l:95,90,80,50;ls:0px,0px,-1px,0px;fw:700;a:left,left,center,center;" data-dim="w:850px,743px,659px,455px;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1100;sp:1000;sR:1100;" data-frame_999="o:0;st:w;sR:6900;" style="z-index:11;text-transform:uppercase;" class="font-current-theme1">{{$b->title1}}<span class="text-theme-colored1">{{$b->title2}} </span> {{$b->title3}}
                  </rs-layer>
                  <rs-layer id="slider-2-slide-2-layer-22" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:60px,60px,-90px,-100px;yo:548px,480px,440px,370px;" data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:1700;sp:1000;sR:1700;" data-frame_999="o:0;st:w;sR:6300;" style="z-index:10;" class="font-current-theme1"><a href="{{$b->read_more_link}}" class="btn btn-theme-colored1 text-white">Read More</a>
                  </rs-layer>
                  <rs-layer id="slider-2-slide-2-layer-3" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:240px,240px,90px,100px;yo:548px,480px,440px,370px;" data-text="w:normal;s:20,16,16,13;l:22,20,18,20;a:left,left,left,center;" data-frame_0="y:-50,-37,-28,-17;" data-frame_1="st:2020;sp:1000;sR:2020;" data-frame_999="o:0;st:w;sR:5980;" style="z-index:9;" class="font-current-theme1"><a href="{{$b->contact_us_link}}" class="btn btn-theme-colored2 text-white">Contact Us</a>
                  </rs-layer>
                  <rs-layer id="slider-2-slide-2-layer-0" data-type="shape" data-rsp_ch="on" data-text="w:normal;s:20,14,10,6;l:0,18,13,8;" data-dim="w:100%;h:100%;" data-basealign="slide" data-frame_999="o:0;st:w;sR:8700;" style="z-index:8;background-color:rgba(0,10,22,0.17);">
                  </rs-layer>
                </rs-slide>
                @endforeach
              </rs-slides>
              <rs-static-layers>
                <!--
                    -->
              </rs-static-layers>
              <rs-progress class="rs-bottom" style="height: 5px; background: rgba(199,199,199,0.5);"></rs-progress>
            </rs-module>
            <script>
              if (typeof revslider_showDoubleJqueryError === "undefined") {
                function revslider_showDoubleJqueryError(sliderID) {
                  var err = "<div class='rs_error_message_box'>";
                  err += "<div class='rs_error_message_oops'>Oops...</div>";
                  err += "<div class='rs_error_message_content'>";
                  err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
                  err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
                  err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
                  err += "</div>";
                  err += "</div>";
                  jQuery(sliderID).show().html(err);
                }
              }
            </script>
          </rs-module-wrap>
          <!-- END REVOLUTION SLIDER -->
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: Features -->
  <section class="features-section z-index-1">
    <div class="container pt-0 pb-0 pt-sm-100">
      <div class="section-content">
        <div class="row" data-tm-margin-top="-120">
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="feature-box mb-lg-90 bg-theme-colored1">
              <div class="feature-content">
                <i class="{{ $feature->icon1 }}"></i>
                <h5 class="title">{{ $feature->feature1 }}</h5>
                <p>{!! $feature->description1 !!}</p>
                <a href="{{ $feature->btn1_link }}" class="btn btn-xs btn-theme-colored4 btn-round">{{ $feature->btn1_name }}</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="feature-box mb-lg-90 bg-theme-colored4">
              <div class="feature-content">
                <i class="{{ $feature->icon2 }}"></i>
                <h5 class="title">{{ $feature->feature2 }}</h5>
                <p>{!! $feature->description1 !!}</p>
                <a href="{{ $feature->btn2_link }}" class="btn btn-xs btn-theme-colored2 btn-round">{{ $feature->btn2_name }}</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="feature-box mb-lg-90 bg-theme-colored2">
              <div class="feature-content">
                <i class="{{ $feature->icon3 }}"></i>
                <h5 class="title">{{ $feature->feature3 }}</h5>
                <ul class="opening-hours tm-sc-opening-hours-compressed opening-hours section-typo-light">
                  <li class="clearfix">
                    <span>{{ $feature->day1 }}</span>
                    <div class="value">{{ $feature->time1 }}</div>
                  </li>
                  <li class="clearfix">
                    <span>{{ $feature->day2 }}</span>
                    <div class="value">{{ $feature->time2 }}</div>
                  </li>
                  <li class="clearfix">
                    <span>{{ $feature->day3 }}</span>
                    <div class="value">{{ $feature->time3 }}</div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="feature-box mb-lg-90 bg-theme-colored3">
              <div class="feature-content">
                <i class="{{ $feature->icon4 }}"></i>
                <h5 class="title">{{ $feature->feature4 }}</h5>
                <p>{!! $feature->description1 !!}</p>
                <span class="phone">{{ $feature->phone }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

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
          <p class="mb-40">{!! Str::limit($about-> description, 350)!!}</p>

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
          <a href="{{$about->btn_link}}" class="btn btn-theme-colored1 mb-lg-40">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Funfact -->
  <section class="position-relative layer-overlay overlay-theme-colored2-9" data-tm-bg-img="images/bg/bg12.jpg">
    <div class="container pb-70">
      <div class="section-content">
        <div class="row">
          @foreach ($counter as $c )
          <div class="col-xl-3 col-md-6">
            <div class="tm-sc-funfact-current-style funfact mb-lg-60">
              <div class="funfact-icon">
                <img class="mb-20" src="{{asset('Backend/images/counter/'.$c->image)}}" alt="">
              </div>
              <h2 class="counter">
                <span class="animate-number" data-value="{{$c->number}}" data-animation-duration="1000">0</span>
              </h2>
              <p class="title">{{$c->title}}</p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>

  <section class="bg-silver-light">
    <div class="container">
      <div class="section-title">
        <div class="row">
          <div class="col-lg-12">
            <div class="tm-sc-section-title section-title text-center">
              <div class="title-wrapper">
                <h6 class="subtitle text-theme-colored1">Our Products</h6>
                <h2 class="title">What We’re offering</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-12">
            <div class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style7-current-theme owl-dots-dark-skin owl-dots-center owl-nav-outer">
              <div class="owl-carousel owl-theme tm-owl-carousel-3col" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                @foreach($data1 as $p)
                <div class="isotope-item cat1 cat3">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">
                        <div class="thumb image-swap">
                          <a href="#"><img src="{{asset('Backend/images/products/'.$p->image)}}" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                          <a href="#"><img src="{{asset('Backend/images/products/'.$p->image)}}" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                        </div>
                      </div>
                      <div class="product-details">
                        <span class="product-categories"><a href="{{url('product')}}" rel="tag">{{$p->category_name}}</a></span>
                        <h5 class="product-title"><a href="{{route('product.show',$p->slug)}}">{{$p->product_name}}</a></h5>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach

                <div class="isotope-item cat1 cat3">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">

                        <div class="thumb image-swap">
                          <a href="#"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>

                        </div>

                      </div>
                      <div class="product-details">
                        <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                        <h5 class="product-title"><a href="#">Product Title</a></h5>

                      </div>
                    </div>
                  </div>
                </div>
                <div class="isotope-item cat1 cat3">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">

                        <div class="thumb image-swap">
                          <a href="#"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                          <a href="#"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                        </div>

                      </div>
                      <div class="product-details">
                        <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                        <h5 class="product-title"><a href="#">Product Title</a></h5>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Section: Call Us Area -->
  <section class="layer-overlay overlay-theme-colored2-9 bg-img-center" data-tm-bg-img="{{asset('assets/images/bg/bg7.jpg')}}">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-lg-12">
            <div class="call-us">
              <div class="tm-sc-call-us text-center">
                <div class="tm-sc-icon-box icon-box text-center iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-30">
                  <div class="icon-box-wrapper">
                    <div class="icon-wrapper">
                      <a class="icon icon-gray icon-xl">
                        <i class="fa fa-phone"></i>
                      </a>
                    </div>
                  </div>
                </div>
                <h6 class="subtitle text-white text-uppercase">You want to discuss with our team</h6>
                <h2 class="phone-number font-current-theme1"><a class="text-theme-colored1" href="tel:{{ $feature->phone }}">{{ $feature->phone }}</a></h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Depertment -->
  <section class="" data-tm-bg-img="{{asset('assets/images/bg/slide5.jpg')}}">
    <div class="container pt-90" style="padding-bottom: 0px;">
      <div class="section-title">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="text-center mb-60">
              <div class="tm-sc-section-title section-title mb-60">
                <div class="title-wrapper">
                  <h6 class="mt-0 font-italic sub-title-icon">STATE OF THE ART MANUFACTURING FACILITY</h6>
                  <h2>Our Depertment</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-12">
            <div class="tm-sc-departments tm-sc-departments-tab">
              <ul class="nav nav-tabs">
                @foreach ($department as $key => $dept)
                <li class="{{ $key === 0 ? 'active' : '' }}">
                  <a href="#{{ Str::slug($dept->title) }}" data-bs-toggle="tab" style="width: 188px; height: 104px;" class="{{ $key === 0 ? 'active' : '' }}">
                    <span>{{ $dept->title }}</span>
                  </a>
                </li>
                @endforeach
              </ul>
              <div class="tab-content">
                @foreach ($department as $key => $dept)
                <div class="tab-pane fade {{ $key === 0 ? 'in active show' : '' }}" id="{{ Str::slug($dept->title) }}">
                  <div class="row">
                    <div class="col-xl-6">
                      <div class="tab-left-part mb-lg-40">
                        <h2 class="title mt-0 mb-30">{{ $dept->title }}</h2>
                        <p class="mb-40">{!! $dept->description !!}</p>
                      </div>
                    </div>
                    <div class="col-xl-6">
                      <div class="thumb">
                        <img width="550" height="550" src="{{asset('Backend/images/department/'.$dept->image)}}" class="img-fullwidth" alt="images" />
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <script>
    $(document).ready(function() {
      // Handle tab click event
      $('.nav-tabs li a').on('click', function() {
        // Remove 'active' class from all tabs
        $('.nav-tabs li').removeClass('active');
        // Add 'active' class to the clicked tab's parent li
        $(this).parent('li').addClass('active');
        // Remove 'in active show' classes from all tab panes
        $('.tab-content .tab-pane').removeClass('in active show');
        // Get the target tab pane ID and add 'in active show' to it
        var target = $(this).attr('href');
        $(target).addClass('in active show');
      });
    });
  </script>
  <!--client -->
  <section class="bg-silver-light">
    <div class="container">
      <div class="section-title">
        <div class="row">
          <div class="col-lg-12">
            <div class="tm-sc-section-title section-title text-center">
              <div class="title-wrapper">
                <!-- <h6 class="subtitle text-theme-colored1">Our Clients</h6> -->
                <h2 class="title">Our Clients</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-sm-12">
            <!-- <div class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style7-current-theme owl-dots-dark-skin owl-dots-center owl-nav-outer"> -->
            <div class="owl-carousel owl-theme tm-owl-carousel-3col" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
              @foreach($clients as $client)
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner" style="width: 295px; height: 382px;">
                    <div class="thumb">
                      <img src="{{asset('Backend/images/client/'.$client->image)}}" alt="Image">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner">
                    <div class="thumb">
                      <img src="images/team/1.jpg" alt="Image">
                      <div class="staff-social-links">
                        <ul>
                          <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="staff-content">
                      <h4 class="name text-black-333"><a href="page-team-details.html">David James</a></h4>
                      <div class="speciality">Consultant</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner">
                    <div class="thumb">
                      <img src="images/team/1.jpg" alt="Image">
                      <div class="staff-social-links">
                        <ul>
                          <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="staff-content">
                      <h4 class="name text-black-333"><a href="page-team-details.html">David James</a></h4>
                      <div class="speciality">Consultant</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- </div> -->
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
<!-- certificate-->
<section class="bg-silver-light">
  <div class="container">
    <div class="section-title">
      <div class="row">
        <div class="col-lg-12">
          <div class="tm-sc-section-title section-title text-center">
            <div class="title-wrapper">
              <!-- <h6 class="subtitle text-theme-colored1"></h6> -->
              <h2 class="title">Our Certificate</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12">
          <div class="tm-sc-testimonials tm-sc-testimonials-carousel testimonial-style7-current-theme owl-dots-dark-skin owl-dots-center owl-nav-outer">
          <div class="owl-carousel owl-theme tm-owl-carousel-3col" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
              @foreach($certificate as $certi)
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner" style="width: 295px; height: 382px;">
                    <div class="thumb">
                      <img src="{{asset('Backend/images/certificate/'.$certi->image)}}" alt="Image">
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner">
                    <div class="thumb">
                      <img src="images/team/1.jpg" alt="Image">
                      <div class="staff-social-links">
                        <ul>
                          <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="staff-content">
                      <h4 class="name text-black-333"><a href="page-team-details.html">David James</a></h4>
                      <div class="speciality">Consultant</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                <div class="tm-staff">
                  <div class="staff-inner">
                    <div class="thumb">
                      <img src="images/team/1.jpg" alt="Image">
                      <div class="staff-social-links">
                        <ul>
                          <li><a target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-instagram"></i></a></li>
                          <li><a target="_blank" href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="staff-content">
                      <h4 class="name text-black-333"><a href="page-team-details.html">David James</a></h4>
                      <div class="speciality">Consultant</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Book Now -->
<section>
  <div class="container-fluid p-0">
    <div class="tm-sc-custom-columns-holder tm-cc-two-columns tm-cc-responsive-mode-1280">
      <div class="tm-sc-custom-columns-holder-item bg-img-left" data-item-class="tm-custom-columns-11" data-tm-bg-img="{{asset('assets/images/bg/divider.jpg')}}" data-1200-up="80px 15% 70px 15%" data-1199-down="80px 10% 70px 10%" data-991-down="80px 10% 70px 10%" data-767-down="80px 10% 70px 10%" data-575-down="80px 10% 70px 10%">
        <div class="tm-sc-section-title section-title section-title-light mb-0 text-center">
          <div class="box-hover-effect tm-sc-video-popup tm-sc-video-popup-css-button mb-30">
            <div class="effect-wrapper d-flex align-items-center">
              <div class="animated-css-play-button"><span class="play-icon"><i class="fa fa-play"></i></span></div>
              <a class="hover-link" data-lightbox-gallery="youtube-video" href="https://www.youtube.com/watch?v=13-sRRCh2LU&t=2s" title=""></a>
            </div>
          </div>
        </div>
        <div class="item-inner">
          <div class="item-content tm-custom-columns-11">
          </div>
        </div>
      </div>
      <div class="tm-sc-custom-columns-holder-item bg-theme-colored1" data-item-class="tm-custom-columns-12" data-1200-up="100px 15% 100px 15%" data-1199-down="100px 10% 100px 10%" data-991-down="100px 10% 100px 10%" data-767-down="100px 10% 100px 10%" data-575-down="100px 10% 100px 10%">
        <div class="item-inner">
          <div class="item-content tm-custom-columns-12">
            <!-- Contact Form -->
            <div class="book-now-form">
              <h6 class="mt-0 font-italic sub-title-icon white-icon text-white">Contact With Us</h6>
              <h2 class="text-white mb-40">Write a Message</h2>
              <form id="contact_form" name="contact_form" class="" action="{{route('inquiry')}}" method="post">
                  @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="name" class="form-control" type="text" placeholder="Enter Name" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                  
                </div>
                <div class="mb-3">
                  <textarea name="message" class="form-control required" rows="6" placeholder="Enter Message"></textarea>
                </div>
                <div class="mb-3 mb-0">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" name="submit" value="submir" class="btn btn-flat btn-theme-colored2 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Send</button>
                </div>
              </form>
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Book Now -->

<!-- Section: News -->
<section class="bg-silver-light">
  <div class="container" data-tm-padding-bottom="235px">
    <div class="section-title">
      <div class="row">
        <div class="col-lg-6">
          <div class="tm-sc-section-title section-title">
            <div class="title-wrapper">
              <h6 class="title-icon-left text-theme-colored1 m-0">From the Blog</h6>
              <h2 class="mt-0 mb-0">Latest Blogs</h2>
            </div>
          </div>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
</section>

<section data-tm-margin-top="-235px">
  <div class="container pt-0">
    <div class="section-content">
      <div class="row">
        @foreach($blog as $b)
        <div class="col-md-6 col-lg-6 col-xl-4">
          <div class="blog-style1-current-theme mb-30">
            <article class="post">
              <div class="entry-header">
                <div class="post-thumb">
                  <div class="thumb"> 
                    <img class="w-100" src="{{asset('Backend/images/blogs/'.$b->image)}}" alt="Image">
                  </div>
                </div>
              </div>
              <div class="entry-content">
                <div class="entry-meta">
                  <h4 class="entry-title mt-0 mb-20">
                    <a href="#" rel="bookmark">{{$b->title}}</a></h4>
                  <div class="post-excerpt mb-20">
                    <p>{!! Str::limit($b->short_desc,50) !!}</p>
                  </div>
                  <div class="post-meta">                   
                    <span class="comments-type mr-10">
                      <i class="far fa-comments text-theme-colored1"></i>
                       {{$b->views}} Views
                    </span>                    
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </article>
          </div>
        </div>
        @endforeach
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
            <a href="{{url('contact-us')}}" class="btn btn-light">Contact Us</a>
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