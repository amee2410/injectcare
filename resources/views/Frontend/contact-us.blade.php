<?php
$currentURL = url()->current();
$slug = basename(parse_url($currentURL, PHP_URL_PATH));
$BreadCrumb = DB::table('menus')->select('*')->where('slug', $slug)->first();
?>

@extends('Frontend.layouts.app')

@section('content')
<!-- Start main-content -->
<div class="main-content-area">
  <?php $data = DB::table('menus')->select('*')->where('id', 6)->first(); ?>
  <!-- Section: home Start -->
  <section class="page-title divider layer-overlay overlay-theme-colored2-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
    <div class="container pt-50 pb-50">
      <!-- Section Content -->
      <div class="section-content">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="title text-white">Contact Us</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="#"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">Contact Us</span>
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
            <!-- Contact Form -->
            <form class="" action="{{route('inquiry')}}" method="post">
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
                    <label>Subject <small>*</small></label>
                    <input name="subject" class="form-control required" type="text" placeholder="Enter Subject">
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
            <!-- <script>
              (function($) {
                $("#contact_form").validate({
                  submitHandler: function(form) {
                    var form_btn = $(form).find('button[type="submit"]');
                    var form_result_div = '#form-result';
                    $(form_result_div).remove();
                    form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                    var form_btn_old_msg = form_btn.html();
                    form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                    $(form).ajaxSubmit({
                      dataType: 'json',
                      success: function(data) {
                        if (data.status == 'true') {
                          $(form).find('.form-control').val('');
                        }
                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                        $(form_result_div).html(data.message).fadeIn('slow');
                        setTimeout(function() {
                          $(form_result_div).fadeOut('slow')
                        }, 6000);
                      }
                    });
                  }
                });
              })(jQuery);
            </script> -->
          </div>
          </br>
          </br>
          <style>
            #map {
              width: 100%;
              height: 400px;
              border: 1px solid #ddd;
            }
          </style>
          <div class="col-lg-6">
            <!-- Map Container Placeholder -->
            <div id="map" style="height: 400px; width: 1300px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3740.5252052418136!2d72.9220900750326!3d20.361224010371455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0ce4766dc513d%3A0x31709c37cf7f7d66!2sInject%20Care%20Parenterals%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1696842901396!5m2!1sen!2sin" width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection