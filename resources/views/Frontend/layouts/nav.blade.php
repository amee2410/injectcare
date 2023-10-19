 <!-- Header -->
 <header id="header" class="header header-layout-type-header-2rows">
   <div class="header-top">
     <div class="container">
       <div class="row">
         <div class="col-xl-auto header-top-left align-self-center text-center text-xl-start">
           <ul class="element contact-info">
             <?php $data1 = DB::table('contacts')->select('*')->first(); ?>
             <li class="contact-phone"><i class="fa fa-phone font-icon sm-display-block"></i> <a href="tel:{{$data1->phone1}}"> Tel: {{$data1->phone1}} </a></li>
             <li class="contact-email"><i class="fa fa-envelope font-icon sm-display-block"></i><a href="mailto:{{$data1->email}}"> {{$data1->email}} </a> </li>
             <!-- <li class="contact-address"><i class="fa fa-map font-icon sm-display-block"></i> {{$data1->address}}</li> -->
           </ul>
         </div>
         <div class="col-xl-auto ms-xl-auto header-top-right align-self-center text-center text-xl-end">
           <div class="element pt-0 pb-0">
             <?php $footer = DB::table('footer_settings')->select('*')->first(); ?>
             <ul class="styled-icons icon-dark icon-theme-colored1 icon-circled clearfix">
               <li><a class="social-link" href="{{$footer->facebook_link}}"><i class="fab fa-facebook"></i></a></li>
               <li><a class="social-link" href="{{$footer->twitter_link}}"><i class="fab fa-twitter"></i></a></li>
               <li><a class="social-link" href="{{$footer->youtube_link}}"><i class="fab fa-youtube"></i></a></li>
             </ul>
           </div>
           <div class="element pt-0 pt-lg-10 pb-0">
             <a href="#" class="btn btn-theme-colored2 btn-sm ajaxload-popup">Company Profile</a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <?php $data = DB::table('header_settings')->select('*')->first(); ?>
   <div class="header-nav tm-enable-navbar-hide-on-scroll">
     <div class="header-nav-wrapper navbar-scrolltofixed">
       <div class="menuzord-container header-nav-container">
         <div class="container position-relative">
           <div class="row header-nav-col-row">
             <div class="col-sm-auto align-self-center">
               <a class="menuzord-brand site-brand" href="{{url('index')}}">
                 <img class="logo-default logo-1x" src="{{asset('Backend/images/header_setting/'.$data->logo)}}" alt="Logo">
                 <img class="logo-default logo-2x retina" src="{{asset('Backend/images/header_setting/'.$data->logo)}}" alt="Logo">
               </a>
             </div>
             <div class="col-sm-auto ms-auto pr-0 align-self-center">
               <nav id="top-primary-nav" class="menuzord theme-color2" data-effect="fade" data-animation="none" data-align="right">
                 <?php $menuItems = DB::table('menus')->select('*')->get(); ?>
                 <ul id="main-nav" class="menuzord-menu">
                   @foreach($menuItems as $menuItem)
                   <li class="{{ request()->is($menuItem->slug) ? 'active' : '' }}">
                     <a href="{{ url($menuItem->slug) }}">{{ $menuItem->page_name }}</a>
                   </li>
                   @endforeach
                 </ul>
               </nav>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </header>