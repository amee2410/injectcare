@php
    $html_tag_data = [];
    $title = 'Dashboard';
    $description = 'Home screen.';
@endphp
@extends('Backend.layout.layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])
@section('content')
@include('Backend.layout.breadcrumb')   
   <div class="pcoded-inner-content">
      <div class="main-body">
         <div class="page-wrapper">
            <div class="page-body">
               <div class="row">
                  <div class="col-md-12 col-xl-4">
                      
                     <div class="card comp-card">
                        <div class="card-body">
                        <a href="{{url('Banner')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Banners</h6>
                                 <h3 class="f-w-700 text-c-blue"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-image bg-c-blue"></i>
                              </div>
                           </div>
                        </a>
                        </div>
                     </div>
                     <div class="card comp-card">
                        <div class="card-body">
                        <a href="{{url('Destination')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Destinations</h6>
                                 <h3 class="f-w-700 text-c-green"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-map-marker bg-c-green"></i>
                              </div>
                           </div>
                        </div>
                       </a>
                     </div>
                     <div class="card comp-card">
                        <div class="card-body">
                        <a href="{{url('Testimonials')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Testimonials</h6>
                                 <h3 class="f-w-700 text-c-blue"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-comments bg-c-blue"></i>
                              </div>
                           </div>
                        </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-4">
                     <div class="card comp-card">
                        <div class="card-body">
                        <a href="{{url('Services')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Services</h6>
                                 <h3 class="f-w-700 text-c-yellow"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-truck bg-c-yellow"></i>
                              </div>
                           </div>
                        </a>
                        </div>
                     </div>
                     <div class="card comp-card">
                        <div class="card-body">
                            <a href="{{url('Directors')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Directors</h6>
                                 <h3 class="f-w-700 text-c-blue"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-user bg-c-blue"></i>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div>
                     <div class="card comp-card">
                        <div class="card-body">
                            <a href="{{url('Work_process')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Work Process</h6>
                                 <h3 class="f-w-700 text-c-yellow"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-tasks bg-c-yellow"></i>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-xl-4">
                     <div class="card comp-card">
                        <div class="card-body">
                            <a href="{{url('Portfolio')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Portfolio</h6>
                                 <h3 class="f-w-700 text-c-green"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-camera-retro bg-c-green"></i>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div>
                     <div class="card comp-card">
                        <div class="card-body">
                            <a href="{{url('Blog')}}">
                           <div class="row align-items-center">
                              <div class="col">
                                 <h6 class="m-b-25">Blogs</h6>
                                 <h3 class="f-w-700 text-c-yellow"></h3>
                              </div>
                              <div class="col-auto">
                                 <i class="fas fa-edit bg-c-yellow"></i>
                              </div>
                           </div>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection

