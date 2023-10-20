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
            <h2 class="title text-white">Blogs</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">Blogs</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: News -->
  <section>
    <div class="container pb-70">
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
                      <a href="{{route('blogs.show',$b->slug)}}" rel="bookmark">{{$b->title}}</a>
                    </h4>
                    <div class="post-excerpt mb-20">
                      <p>{{ Str::limit(strip_tags($b->description,'20')) }}</p>
                    </div>
                    <div class="post-meta">
                      <span class="comments-type mr-10"><i class="far fa-comments text-theme-colored1"></i>{{$b->views}} Views</span>
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
</div>
<!-- end main-content -->
@endsection