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
              <h2 class="title text-white">Contact</h2>
              <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                <div class="breadcrumbs">
                  <span class="trail-item trail-begin">
                    <a href="#"><span>Home</span></a>
                  </span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item"><a href="#"><span>Pages</span></a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item trail-end">Contact</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: home End -->

    <!-- Section: Contact -->
    <section  id="contact" class="bg-white-f4">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-lg-6">
              <h5 class="mb-0 text-gray">Happy to help!</h5>
              <h2 class="mb-30">If you need someone to talk to, we listen. We won’t judge or tell you what to do.</h2>
              <div class="icon-box icon-left iconbox-centered-in-responsive iconbox-theme-colored1 animate-icon-on-hover animate-icon-rotate mb-50">
                <div class="icon-box-wrapper">
                  <div class="icon-wrapper">
                    <a class="icon icon-type-font-icon icon-dark icon-circled"> <i class="flaticon-contact-044-call-1"></i> </a>
                  </div>
                  <div class="icon-text">
                    <h5 class="icon-box-title mt-0">Phone</h5>
                    <div class="content"><a href="tel:+123.456.7890">+123.456.7890</a></div>
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
                    <div class="content"><a href="mailto:needhelp@yourdomain.com">needhelp@yourdomain.com</a></div>
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
                    <div class="content">66 Broklyn Street USA</div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <ul class="styled-icons icon-dark icon-sm icon-circled mt-30">
                <li><a href="#" data-tm-bg-color="#3B5998"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#" data-tm-bg-color="#02B0E8"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" data-tm-bg-color="#4C75A3"><i class="fab fa-vk"></i></a></li>
                <li><a href="#" data-tm-bg-color="#D9CCB9"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" data-tm-bg-color="#D71619"><i class="fab fa-google-plus"></i></a></li>
                <li><a href="#" data-tm-bg-color="#A4CA39"><i class="fab fa-android"></i></a></li>
                <li><a href="#" data-tm-bg-color="#4C75A3"><i class="fab fa-vk"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <h2 class="mt-0 mb-0">Interested in discussing?</h2>
              <p class="font-size-20">Active & Ready to use Contact Form!</p>
              <!-- Contact Form -->
              <form id="contact_form" name="contact_form" class="" action="https://kodesolution.com/html/2021/medikx-html/includes/sendmail.php" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Name <small>*</small></label>
                      <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Email <small>*</small></label>
                      <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Subject <small>*</small></label>
                      <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="mb-3">
                      <label>Phone</label>
                      <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label>Message</label>
                  <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                </div>
                <div class="mb-3">
                  <input name="form_botcheck" class="form-control" type="hidden" value="" />
                  <button type="submit" class="btn btn-flat btn-theme-colored1 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px" data-loading-text="Please wait...">Send your message</button>
                  <button type="reset" class="btn btn-flat btn-theme-colored3 text-uppercase mt-10 mb-sm-30 border-left-theme-color-2-4px">Reset</button>
                </div>
              </form>
              <!-- Contact Form Validation-->
              <script>
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
                        dataType:  'json',
                        success: function(data) {
                          if( data.status == 'true' ) {
                            $(form).find('.form-control').val('');
                          }
                          form_btn.prop('disabled', false).html(form_btn_old_msg);
                          $(form_result_div).html(data.message).fadeIn('slow');
                          setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                        }
                      });
                    }
                  });
                })(jQuery);
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection