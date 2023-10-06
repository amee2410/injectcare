  <div class="loader-bg">
      <div class="loader-bar"></div>
  </div>
  <div id="pcoded" class="pcoded">
  <div class="pcoded-overlay-box"></div>
  <div class="pcoded-container navbar-wrapper">
  <nav class="navbar header-navbar pcoded-header" header-theme="theme6" >
      <div class="navbar-wrapper">
          <div class="navbar-logo">
              <a href="{{url('home')}}">
              <img class="img-fluid" src="{{ asset('Backend/files/assets/images/logo.png') }}" alt="Theme-Logo" />
              </a>
              <a class="mobile-menu" id="mobile-collapse" href="#!">
              <i class="feather icon-menu icon-toggle-right"></i>
              </a>
              <a class="mobile-options waves-effect waves-light">
              <i class="feather icon-more-horizontal"></i>
              </a>
          </div>
          <div class="navbar-container container-fluid">
              <ul class="nav-left">
                  <li class="header-search">
                      <div class="main-search morphsearch-search">
                          <div class="input-group">
                              <span class="input-group-prepend search-close">
                              <i class="feather icon-x input-group-text"></i>
                              </span>
                              <input type="text" class="form-control" placeholder="Enter Keyword">
                              <span class="input-group-append search-btn">
                              <i class="feather icon-search input-group-text"></i>
                              </span>
                          </div>
                      </div>
                  </li>
                  <li>
                      <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                      <i class="full-screen feather icon-maximize"></i>
                      </a>
                  </li>
              </ul>
              <ul class="nav-right">
                  
                  <li class="user-profile header-notification">
                      <div class="dropdown-primary dropdown">
                          <div class="dropdown-toggle" data-toggle="dropdown">
                              <img src="{{ asset('Backend/files/assets/images/profile.png') }}" class="img-radius" alt="User-Profile-Image">
                              <span>Admin</span>
                              <i class="feather icon-chevron-down"></i>
                          </div>
                          <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                              
                              <li>
                                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                  <i class="feather icon-log-out"></i> Logout
                                  </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                              </li>
                          </ul>
                      </div>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  
  <div class="pcoded-main-container">
  <div class="pcoded-wrapper">
  <nav class="pcoded-navbar">
      <div class="nav-list">
          <div class="pcoded-inner-navbar main-menu">
              <ul class="pcoded-item pcoded-left-item">
                  <li class="active pcoded-trigger">
                      <a href="{{url('home')}}" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                      <span class="pcoded-mtext">Dashboard</span>
                      </a>
                  </li>
                  <li class="pcoded-hasmenu">
                      <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                      <span class="pcoded-mtext">Home</span>
                      </a>
                      <ul class="pcoded-submenu">
                          <li class="">
                              <a href="{{url('Banner')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Banners</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('DMIT')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">About DMIT</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Why_Choose_Us')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Why Choose Us</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Faq')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Faqs</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Testimonials')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Testimonials</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Counter')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Counter</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                 
                  <li class="pcoded-hasmenu">
                      <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                      <span class="pcoded-mtext">About Us</span>
                      </a>
                      <ul class="pcoded-submenu">
                          <li class="">
                              <a href="{{url('About')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">About Us</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Mission_Vision')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Mission & Vision</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Team')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Team</span>
                              </a>
                          </li>
                      </ul>
                  </li>
                 <li class="">
                      <a href="{{url('Blogs')}}" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                      <span class="pcoded-mtext">Blogs</span>
                      </a>
                  </li>    
                  <li class="">
                      <a href="{{url('Services')}}" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                      <span class="pcoded-mtext">Services</span>
                      </a>
                  </li>
                  <li class="">
                      <a href="{{url('ContactUs')}}" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-clipboard"></i></span>
                      <span class="pcoded-mtext">Contact Us</span>
                      </a>
                  </li>
                  <li class="pcoded-hasmenu">
                      <a href="javascript:void(0)" class="waves-effect waves-dark">
                      <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                      <span class="pcoded-mtext">Settings</span>
                      </a>
                      <ul class="pcoded-submenu">
                          <li class="">
                              <a href="{{url('Header_Setting')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Header Setting</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Menu')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Menu Setting</span>
                              </a>
                          </li>
                          <li class="">
                              <a href="{{url('Footer_Setting')}}" class="waves-effect waves-dark">
                              <span class="pcoded-mtext">Footer Setting</span>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
