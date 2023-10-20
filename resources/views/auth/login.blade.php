<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inject Care | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('lg/assets/img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('lg/assets/css/bootstrap.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('lg/assets/css/fontawesome-all.min.css')}}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('lg/assets/font/flaticon.css')}}">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('lg/assets/style.css')}}">
</head>

<body>
    <div id="preloader" class="preloader">
        <div class='inner'>
            <div class='line1'></div>
            <div class='line2'></div>
            <div class='line3'></div>
        </div>
    </div>
    <section class="fxt-template-animation fxt-template-layout34" data-bg-image="{{asset('lg/assets/img/elements/bg1.png')}}">
        <div class="fxt-shape">
            <div class="fxt-transformX-L-50 fxt-transition-delay-1">
                <img src="{{asset('lg/assets/img/elements/shape1.png')}}" alt="Shape">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="fxt-column-wrap justify-content-between">
                        <div class="fxt-animated-img">
                            <div class="fxt-transformX-L-50 fxt-transition-delay-10">
                                <img src="{{asset('lg/assets/img/figure/bg34-1.png')}}" alt="Animated Image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="fxt-column-wrap justify-content-center">
                        <div class="fxt-form">
                        <div class="fxt-transformX-L-50 fxt-transition-delay-5">
                            <div class="fxt-middle-content">
                                <h1 class="fxt-main-title">Login Here</h1>
                            </div>
                        </div>
                        <br>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="form-group">
                                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Your Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <i toggle="#password" class="fa fa-fw fa-eye toggle-password field-icon"></i>
                                </div>
                                
                                <div class="form-group">
                                    <button type="submit" class="fxt-btn-fill">Sign In</button>
                                    
                                </div>
                            </form>
                            <center><h5>Don't have an account?<a href="{{ route('register') }}"> Sign up<h5></a></center>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{asset('lg/assets/js/jquery-3.5.0.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('lg/assets/js/bootstrap.min.js')}}"></script>
    <!-- Imagesloaded js -->
    <script src="{{asset('lg/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <!-- Validator js -->
    <script src="{{asset('lg/assets/js/validator.min.js')}}"></script>
    <!-- Custom Js -->
    <script src="{{asset('lg/assets/js/main.js')}}"></script>

</body>
</html>