<?php
$currentURL = url()->current();
$slug = basename(parse_url($currentURL, PHP_URL_PATH));
$BreadCrumb = DB::table('menus')->select('*')->where('slug', $slug)->first();
?>
@extends('Frontend.layouts.app')
@section('content')
<?php $data = DB::table('menus')->select('*')->where('id', 5)->first(); ?>
<!-- Start main-content -->
<div class="main-content-area">
  <!-- Section: home Start -->
  <section class="page-title divider layer-overlay overlay-theme-colored2-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-50 pb-50">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">Careers</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">Careers</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: Contact -->
  <section id="contact" class="bg-white-f4">
    <div class="container">
      <div class="section-content">
        <div class="row">
         <?php $data = DB::table('contacts')->select('*')->first(); ?>
          <div class="col-lg-6">
            <h5 class="mb-0 text-gray">Happy to help!</h5>
            <h2 class="mb-30">If you need someone to talk to, we listen.</h2>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Phone</h5>
                  <div class="content">
                    <a href="tel:{{$data->phone1}}">{{$data->phone1}} | {{$data->phone2}} | {{$data->phone3}}</a>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-043-email-1"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Email</h5>
                  <div class="content"><a href="mailto:{{$data->email}}">{{$data->email}}</a></div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
              <div class="icon-box-wrapper">
                <div class="icon-wrapper">
                  <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-025-world"></i> </a>
                </div>
                <div class="icon-text">
                  <h5 class="icon-box-title mt-0">Address</h5>
                  <div class="content">{{$data->address}}</div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <ul class="styled-icons icon-dark icon-sm icon-circled mt-30">
              <li><a href="#" data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
              <li><a href="#" data-tm-bg-color="#02B0E8"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" data-tm-bg-color="#D9CCB9"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
          <br>
          <div class="col-lg-6">
            <h2 class="mt-0 mb-0">Interested in discussing?</h2>
            <p class="font-size-20">Share your CV</p>
            <!-- Contact Form -->
            <form class="" action="{{ route('career.store') }}" method="post" enctype='multipart/form-data'>
              @csrf
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Name <small>*</small></label>
                    <input name="name" class="form-control" type="text" placeholder="Enter Name">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Email <small>*</small></label>
                    <input name="email" class="form-control required email" type="email" placeholder="Enter Email">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>PDF <small>*</small></label>
                    <input name="pdf" class="form-control required" type="file" placeholder="Enter PDF">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="mb-3">
                    <label>Phone</label>
                    <input name="phone" class="form-control" type="text" placeholder="Enter Phone">
                  </div>
                </div>
              </div>
              <div class="mb-3">
                <label>Message</label>
                <textarea name="message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
              </div>
              <div class="mb-3">
                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                <button type="submit" name="submit" value="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Send</button>
                
              </div>
            </form>
            <!-- Contact Form Validation-->
            
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection