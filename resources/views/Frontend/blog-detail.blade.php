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
            <h2 class="title text-white">{{$data->title}}</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">{{$data->title}}</span>
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
    <div class="container mb-30 pb-40">
      <div class="row">
        <div class="col-lg-9 order-lg-2">
          <div class="blog-posts single-post">
            <article class="post clearfix mb-0">
              <div class="entry-header mb-30">
                <div class="post-thumb thumb">
                  <img src="{{asset('Backend/images/blogdetail/'.$data->large_img)}}" alt="images" class="img-responsive img-fullwidth">
                </div>
                <h3>{{$data->title}}</h3>
                <div class="entry-meta mt-0">
                  <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-calendar-alt mr-10 text-theme-colored1"></i> {{date('d', strtotime($data->created_at))}} {{date('F', strtotime($data->created_at))}}, {{date('Y', strtotime($data->created_at))}}</span>
                  <span class="mb-10 text-gray-darkgray mr-10 font-size-13"><i class="far fa-comments mr-10 text-theme-colored1"></i> {{$data->views}} Views</span>
                </div>
              </div>
              <div class="entry-content">
                <p>{!!$data->description!!}</p>
              </div>
            </article>
          </div>
        </div>
        <div class="col-md-3">
          <div class="sidebar sidebar-left mt-sm-30">
            <div class="widget">
              <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest News</h4>
              <?php $data = DB::table('blogs')->select('*')->latest()->take(3)->get(); ?>
              <div class="latest-posts">
                @foreach($data as $d)
                <article class="post clearfix pb-0 mb-20">
                  <a class="post-thumb" href="#"><img src="{{asset('Backend/images/blogs/'.$d->image)}}" alt="images"></a>
                  <div class="post-right">
                    <h5 class="post-title mt-0"><a href="{{route('blogs.show',$d->slug)}}">{{$d->title}}</a></h5>
                    <span class="post-date">
                      <time class="entry-date" datetime="{{ date('d', strtotime($d->created_at)) }} {{ date('F', strtotime($d->created_at)) }}, {{ date('Y', strtotime($d->created_at)) }}">
                        {{ date('d', strtotime($d->created_at)) }} {{ date('F', strtotime($d->created_at)) }}, {{ date('Y', strtotime($d->created_at)) }}
                      </time>
                    </span>
                  </div>
                </article>
                @endforeach
                <!-- <article class="post clearfix pb-0 mb-20">
                    <a class="post-thumb" href="#"><img src="images/blog/latest-news2.jpg" alt="images"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Industrial Coatings</a></h5>
                      <span class="post-date">
                        <time class="entry-date" datetime="2021-05-15T06:10:26+00:00">April 15, 2021</time>
                      </span>
                    </div>
                  </article>
                  <article class="post clearfix pb-0 mb-20">
                    <a class="post-thumb" href="#"><img src="images/blog/latest-news3.jpg" alt="images"></a>
                    <div class="post-right">
                      <h5 class="post-title mt-0"><a href="#">Storefront Installations</a></h5>
                      <span class="post-date">
                        <time class="entry-date" datetime="2021-05-15T06:10:26+00:00">April 15, 2021</time>
                      </span>
                    </div>
                  </article> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection