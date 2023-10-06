<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Inject Care" />
    <meta name="keywords" content="clinic, coronavirus, corporate, dental, dentist, doctor, hospital, medical," />
    <meta name="author" content="Inject Care" />

    <!-- Page Title -->
    <title>Inject Care</title>

    <!-- Favicon and Touch icon -->
    <link href="{{asset('assets/images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('assets/images/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('assets/images/apple-touch-icon-72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('assets/images/apple-touch-icon-114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('assets/images/apple-touch-icon-144x144.png')}}" rel="apple-touch-icon" sizes="144x144">
    @include('Frontend.layouts.head')
</head>

<body class="tm-container-1300px has-side-panel side-panel-right">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm bg-white-f5">Disable Preloader</div>
    </div>
    <div class="side-panel-body-overlay"></div>
    <div id="side-panel-container" class="dark" data-tm-bg-img="{{asset('assets/images/side-push-bg.jpg')}}">
        <div class="side-panel-wrap">
            <div id="side-panel-trigger-close" class="side-panel-trigger">
                <a href="#"><i class="fa fa-times side-panel-trigger-icon"></i></a></div>
            <img class="logo mb-50" src="{{asset('assets/images/logo-wide.png')}}" alt="Logo">
            <p>Our motive is to help the poor, helpless and orphan children all over the world.</p>
            <div class="widget">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
                <div class="latest-posts">
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="news-details.html">
                            <img src="{{asset('assets/images/blog/latest-news1.jpg')}}" alt="images"></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="news-details.html">Sustainable Construction</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="news-details.html">
                            <img src="{{asset('assets/images/blog/latest-news2.jpg')}}" alt="images"></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="news-details.html">Industrial Coatings</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                    <article class="post clearfix pb-0 mb-10">
                        <a class="post-thumb" href="news-details.html"><img src="{{asset('assets/images/blog/latest-news3.jpg')}}" alt="images"></a>
                        <div class="post-right">
                            <h5 class="post-title mt-0"><a href="news-details.html">Storefront Installations</a></h5>
                            <p>Lorem ipsum dolor...</p>
                        </div>
                    </article>
                </div>
            </div>

            <div class="widget">
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Contact Info</h5>
                <div class="tm-widget-contact-info contact-info-style1 contact-icon-theme-colored1">
                    <ul>
                        <li class="contact-name">
                            <div class="icon"><i class="flaticon-contact-037-address"></i></div>
                            <div class="text">John Doe</div>
                        </li>
                        <li class="contact-phone">
                            <div class="icon"><i class="flaticon-contact-042-phone-1"></i></div>
                            <div class="text"><a href="tel:+510-455-6735">+510-455-6735</a></div>
                        </li>
                        <li class="contact-email">
                            <div class="icon"><i class="flaticon-contact-043-email-1"></i></div>
                            <div class="text"><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></div>
                        </li>
                        <li class="contact-address">
                            <div class="icon"><i class="flaticon-contact-047-location"></i></div>
                            <div class="text">3982 Browning Lane Carolyns Circle, California</div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="clearfix">
        @include('Frontend.layouts.nav')
        @yield('content')
        @include('Frontend.layouts.footer')
    </div>
    <!-- end wrapper -->
    @include('Frontend.layouts.script')
</body>

</html>