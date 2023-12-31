<!DOCTYPE html>
<html lang="en">
  
   <head>
      <title>Inject Care | {{$title}}</title>
      <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js') }}/1.4.2/respond.min.js') }}"></script>
      <![endif]-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="{{$description}}" />
      <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      @include('Backend.layout.head')
</head>
<body>
    @include('Backend.layout.nav')
    <div class="pcoded-content">
    @yield('content')
    </div>
    <div id="styleSelector"></div>
    </div>
    </div>
    </div>
    </div>
    @include('Backend.layout.script')
</body>

</html>
